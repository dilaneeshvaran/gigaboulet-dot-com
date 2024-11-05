<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GalerieController extends Controller
{

    public function savegalerie(Request $request) {
    
        $this->validate($request, [
            'galerie_name' => 'required',
            'galerie_description' => 'required',
            'galerie_image' => 'required|mimes:avif,jpeg,png,gif|max:2048',
        ]);
    
        // Obtenez le fichier téléchargé
        $file = $request->file('galerie_image');
    
        // Obtenez le nom d'origine et l'extension
        $fileNameWithExt = $file->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $ext = $file->getClientOriginalExtension();
    
        // Générez un nom de fichier unique
        $fileNameToStore = $fileName . "_" . time() . "." . $ext;
    
        // Téléchargez l'image dans le stockage
        $path = $file->storeAs("public/galerie_images", $fileNameToStore);
    
        // Créez une nouvelle instance de Galerie
        $galerie = new Galerie();
        $galerie->galerie_name = $request->input('galerie_name');
        $galerie->galerie_description = $request->input('galerie_description');
        $galerie->galerie_image = $fileNameToStore; // Modifiez ici
    
        // Enregistrez la galerie
        $galerie->save();
    
        return redirect('admin/galeries')->with("status", "Votre galerie a été créée avec succès");
    }
    
    public function deletegalerie($id) {
        $galerie=Galerie::find($id);
        Storage::delete("public/galerie_galerie_images/$galerie->galerie_image");
        DB::table('galeries')->where("id",$id)->delete();
        return back()->with("status","votre categorie a ete suprimer  avec succes ");
    }
    public function editgalerie($id){
        $galerie = Galerie::find($id);
        return view('admin.editgalerie')->with("galerie",$galerie);
        
    }
    public function updategalerie($id , Request $request){
        $galerie= Galerie::find ($id);
        $galerie->galerie_name=$request->input('galerie_name');
        $galerie->galerie_description=$request->input('galerie_description');
        //si on rentre une galerie_image 
        if($request->file('galerie_image')){
            $this ->validate($request,[
                'galerie_image' => 'galerie_image|nullable|max:1999' ,
            ]);
            $fileNameWithExt=$request->file('galerie_image')->getClientOriginalName();
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $ext= $request->file('galerie_image')->getClientOriginalExtension();
            $fileNameToStore= $fileName."_".time().".".$ext;


            Storage::delete(("public/galerie_galerie_images/$galerie->galerie_image"));
            $path =$request->file('galerie_image')->storeAs("public/galerie_galerie_images", $fileNameToStore);

            $galerie->galerie_image=$fileNameToStore;
            }
        
    
        $galerie->update();
        return redirect('admin/galeries')->with("status","votre galerie a ete modifie   avec succes ");
    }
    public function unactivategalerie($id){
        $galerie=Galerie::find($id);
        $galerie->status=0;
        $galerie->update();
        return back();
    }
    public function activategalerie($id){
        $galerie=Galerie::find($id);
        $galerie->status=1;
        $galerie->update();
        return back();
    }
}
