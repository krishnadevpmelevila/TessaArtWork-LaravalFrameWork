<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\ImageGallery;

class NewController extends Controller
{
    public function about(){
     
        return (string) Redirect::to('/#about');
    }
    public function services(){
     
        return (string) Redirect::to('/#service');
    }
    public function work(){
        return view("Gallery");
    }
    public function contact(){
       
        return redirect('/#cont');
    }
    public function image()
    {
        $image=ImageGallery::latest()->get();
        $data=[
            "img"=>$image
        ];
        
        return view("Gallery",$data);
    }
}
