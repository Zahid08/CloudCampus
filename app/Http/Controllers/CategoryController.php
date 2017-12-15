<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
//
//    public  function showCategoryForm(){
//        return view('admin.category.category');
//    }

    public function saveCategoryInfo(Request $request){
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;

        $category->save();
        return redirect('/category/category')->with('message', 'Category info save successfully.');
    }

    public function viewCategoryInfo(){
        $categorys = Category::orderBy('id', 'desc')->get();
        return view('admin.category.category', ['categorys' => $categorys]);
    }

    public function updateCategoryInfo(Request $request){
        $categoryId = Category::find($request->id_M);
        $categoryId->category_name = $request->category_name_M;
        $categoryId->category_description = $request->category_description_M;
        $categoryId->publication_status = $request->publication_status_M;

        $categoryId->update();
        return redirect('/category/category')->with('message', 'Category info update successfully.');
    }

    public function deleteCategoryInfo($id){
        $categoryId = Category::find($id);
        $categoryId->delete();

        return redirect('/category/category')->with('message', 'Category info delete successfully.');
    }
}
