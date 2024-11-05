<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    //
    
    public function saveimage(Request $request){
        
        $this ->validate($request,[
            'image_name' => 'required' ,
            'image_price' => 'required' ,
            'image_category' => 'required' ,
            'image_image' => 'image|nullable' ,

        ]);

        //getting file name extension
        $fileNameWithExt=$request->file('image_image')->getClientOriginalName();
        //getting file
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        //getting extension
        $ext= $request->file('image_image')->getClientOriginalExtension();
        // fileNameToStore
        $fileNameToStore= $fileName."_".time().".".$ext;
        // print($fileNameToStore);
        // uploading image in the laravel file
        $path =$request->file('image_image')->storeAs("public/image_images", $fileNameToStore);
        $image =new Image ();
        $image ->image_name =  $request->input ('image_name');
        $image ->description1 =  $request->input ('description1');
        $image ->image_price=  $request->input ('image_price');
        $image ->image_category=  $request->input ('image_category');
        
        $image->image_image =  $fileNameToStore;
        
        $image->save();

        return redirect('admin/images')->with("status","votre image a ete cree avec succes");
    }
    public function deleteptoduct($id){
        $image=Image::find($id);
        Storage::delete("public/image_images/$image->image_image");
        DB::table('images')->where("id",$id)->delete();
        return back()->with("status","votre image a ete suprimer  avec succes ");
    }
    public function editimage($id){
        $image=Image::find($id);
        $categories =Category::where('category_name',"!=", $image->image_category)->get();
        return view('admin.editimage')->with("image",$image)->with("categories",
        $categories);

    }


    public function updateimage($id ,Request $request){
        $image=Image::find($id);
        $image->image_name=$request->input('image_name');
        $image->image_price=$request->input('image_price');
        $image->image_category=$request->input('image_category');
        $image->description1=$request->input('description1');

        //si on rentre une image 

        if($request->file('image_image')){
            $this ->validate($request,[
                'image_image' => 'image|nullable|max:1999' ,
            ]);
            $fileNameWithExt=$request->file('image_image')->getClientOriginalName();
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $ext= $request->file('image_image')->getClientOriginalExtension();
            $fileNameToStore= $fileName."_".time().".".$ext;


            Storage::delete(("public/image_images/$image->image_image"));
            $path =$request->file('image_image')->storeAs("public/image_images", $fileNameToStore);

            $image->image_image=$fileNameToStore;
            }
                
        $image->update();
        return redirect('admin/images')->with("status","votre image a ete modifie   avec succes ");
    }
    public function unactivateimage($id){
        $image=Image::find($id);
        $image->status=0;
        $image->update();
        return back();
    }
    public function activateimage($id){
        $image=Image::find($id);
        $image->status=1;
        $image->update();
        return back();
    }

}
