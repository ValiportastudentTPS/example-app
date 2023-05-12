<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;




class fakeDb_Controller extends Controller
{
    public function fakeData(Request $request){
        if(FacadesDB::connection()->getDatabaseName()){
            $database=FacadesDB::connection()->getDatabaseName();
           echo ("successfully connection , ".$database);}
        
    }
}
