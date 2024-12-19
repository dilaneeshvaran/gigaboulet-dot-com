<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
class PostController extends Controller
{

    public function savepost(Request $request)
    {
        // Validation des données, y compris l'image
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'post_image' => 'mimes:jpeg,png,gif,avif|max:2048', // Validation améliorée
            'excerpt' => 'nullable|string|max:255', // Validation de l'extrait
        ]);
    
        // Obtenez le fichier téléchargé
        $file = $request->file('post_image');
    
        // Obtenez le nom d'origine et l'extension
        $fileNameWithExt = $file->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $ext = $file->getClientOriginalExtension();
    
        // Générez un nom de fichier unique
        $fileNameToStore = $fileName . "_" . time() . "." . $ext;
    
        // Téléchargez l'image dans le stockage
        $path = $file->storeAs('public/post_images', $fileNameToStore);
    
        // Créez une nouvelle instance de Post
        $post = new Post();
        $post->user_id = auth()->id(); // L'utilisateur connecté
        $post->title = $request->input('title');
        $post->slug = $request->input('slug'); // Le slug fourni par l'utilisateur
        $post->category_id=$request->input('category_id');

        $post->excerpt = $request->input('excerpt'); // Extrait (si fourni)
        $post->content = $request->input('content');
        $post->post_image = $fileNameToStore; // Assurez-vous d'enregistrer le nom de l'image
    
        // Enregistrez le post
        $post->save();
    
        return redirect('admin/posts')->with('status', 'Votre post a été créé avec succès');
    }
    
    public function deletepost($id) {
        $post=Post::find($id);
        Storage::delete("public/post_post_images/$post->post_image");
        DB::table('posts')->where("id",$id)->delete();
        return back()->with("status","votre categorie a ete suprimer  avec succes ");
    }
    public function editpost($id){
        $post = Post::find($id);
        return view('admin.editpost')->with("post",$post);
        
    }
    public function updatepost($id , Request $request){
        $post= Post::find ($id);
        $post->title=$request->input('title');
        $post->content=$request->input('content');
        //si on rentre une post_image 
        if($request->file('post_image')){
            // $this ->validate($request,[
            //     'post_image' => 'post_image|nullable|max:1999' ,
            // ]);
            $fileNameWithExt=$request->file('post_image')->getClientOriginalName();
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $ext= $request->file('post_image')->getClientOriginalExtension();
            $fileNameToStore= $fileName."_".time().".".$ext;


            Storage::delete(("public/post_images/$post->post_image"));
            $path =$request->file('post_image')->storeAs("public/post_images", $fileNameToStore);

            $post->post_image=$fileNameToStore;
            }
        
    
        $post->update();
        return redirect('admin/posts')->with("status","votre post a ete modifie   avec succes ");
    }
    public function unactivatepost($id){
        $post=Post::find($id);
        $post->status=0;
        $post->update();
        return back();
    }
    public function activatepost($id){
        $post=Post::find($id);
        $post->status=1;
        $post->update();
        return back();
    }
}
