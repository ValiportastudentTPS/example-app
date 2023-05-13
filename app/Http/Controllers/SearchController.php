<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(){
        return view('search');
    }

    public function result(Request $request){
        $all=$request->all();
        var_dump($all);
        $search=$request->get('query');
        $notizie=[];
        //return view('result', $notizie);
    }
}
