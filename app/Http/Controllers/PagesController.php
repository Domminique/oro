<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $title = "Rongai In shame after Rivers full of dirty water rolls our backyards";
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
     public function learn(){
          $title = "Rongai writers get their first big cheque from Rongai News after listing on NSE this week";
        return view('pages.learn')->with('title', $title);
    }
     public function advertise(){
         $data = array(
             'title' => 'Rotary club of Rongai get a 8B donation from Ongata Ronagi Online',
             'author' => ['Dominic Imbuga', 'Steve Mahigu', 'Caroline Caro']
         );
        return view('pages.advertise')->with($data);
    }
     public function write(){
        return view('pages.write');
    }
}
