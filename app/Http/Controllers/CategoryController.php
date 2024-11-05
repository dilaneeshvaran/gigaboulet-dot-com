<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //

    public function savecategory(Request $request){
        $category =new Category();
        // la category_name dans la bd auras la valeur de l'input appelle category_name 
        $category->category_name = $request->input('category_name');
        $category->save();
        return back()->with("status","Vtore categorie a ete cree avec succes ");
    }

    public function deletecategory($id){
        DB::table('categories')->where("id",$id)->delete();
        return back()->with("status","votre categorie a ete suprimer  avec succes ");

    }
    public function editcategory($id){
        $category = Category::find($id);
        return view('admin.editcategory')->with("category",$category);
    }
    public function updatecategory($id, Request $request){
        $category= Category::find ($id);
        $category->category_name=$request->input('category_name');
        $category->update();
        return redirect('admin/categories')->with("status","votre categorie a ete modifier   avec succes ");

    }
}
