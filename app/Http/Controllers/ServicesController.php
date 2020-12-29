<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{

  

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create (){
        return view ('services.create');
    }

    public function store(){

        $data = request() -> validate([
              'name' => 'required',
              'surname' => ' ',
              'business_name' => '',
              'business_type' => '',
              'business_phone_number' => '',
              'mobile_phone_number' => '',
              'email' => '',
              'business_web_address' => '',
              'image' => ['required','image']


        ]);
         auth()->user()->services()->create($data);
        dd(request()->all());
    
        
       
    }
}
