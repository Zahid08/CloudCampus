<?php

namespace App\Http\Controllers;
use Image;
use App\Gallery;
use Illuminate\Http\Request;

class galleryController extends Controller
{
//    public  function  galleryContent(){
//        return view('frontend.gallery.gallery-content');
//    }
    public  function  galleryContent(){
        $gallerys = Gallery::orderBy('id', 'asc')->get();

        return view('frontend.gallery.gallery-content',
            ['gallerys'=>$gallerys]
        );
    }


    public function viewGalleryInfo(){

        $galleries = Gallery::orderBy('id', 'desc')->get();
        return view('admin.gallery.gallery', ['galleries' => $galleries]);
    }


    public function saveGalleryInfo(Request $request){

        $imagePath = $request->file('image_path');
        $imageName = $imagePath->getClientOriginalName();
        $directory= 'gallery-images/';
        $imageUrl=$directory. $imageName;
        Image::make($imagePath)->save($imageUrl);

        $gallery = new Gallery();
        $gallery->image_name = $request->image_name;
        $gallery->description = $request->description;
        $gallery->image_path = $imageUrl;

        //return $employee;

        $gallery->save();

        return redirect('/gallery/gallery')->with('message', 'Gallery info save successfully.');
    }


    public function updateGalleryInfo(Request $request){

        $gallery = Gallery::find($request->id_M);

        $gallery->image_name = $request->image_name_m;
        $gallery->description = $request->description_m;

        //$gallery->image_path = $imageUrl;

        $gallery->update();

        return redirect('/gallery/gallery')->with('message', 'Gallery info update successfully.');
    }


    public function deleteGalleryInfo($id){
        $gallery = Gallery::find($id);
        $gallery->delete();

        return redirect('/gallery/gallery')->with('message', 'Gallery info delete successfully.');
    }


    public function inactiveGalleryInfo($id){
        $gallery = Gallery::find($id);
        $gallery->is_active = 0;
        $gallery->update();

        return redirect('/gallery/gallery')->with('message', 'Gallery Inactive  successfully.');
    }


    public function activeGalleryInfo($id){
        $gallery = Gallery::find($id);
        $gallery->is_active = 1;
        $gallery->update();

        return redirect('/gallery/gallery')->with('message', 'Gallery Aactive successfully.');
    }






}
