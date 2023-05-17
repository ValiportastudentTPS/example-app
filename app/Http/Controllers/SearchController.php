<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Notizia;

class SearchController extends Controller
{
    public function search(){
        return view('search');
    }

    public function result(Request $request){
        $all=$request->all();
        var_dump($all);
        $testo=$request->get('testo');
        $categoria=$request->get('categoria');
        $formato=$request->get('formato');

        $notizie=Notizia::where('categoria', '=', $categoria)->Where('formato', '=', $formato);
        return view('result', $notizie);
    }
}
