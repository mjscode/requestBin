<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\domain;
use App\bin_names;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class CreateBinsController extends Controller {
    public function index(){
        if(Auth::user()){
        $loggedIn=Auth::user();
        $user=$loggedIn['name'];
        $uBins=DB::table('domains')->select('binName')->where('user','=',$user)->get();
        $array=[];
        foreach($uBins as $bin){
            array_push($array,$bin->binName);
        }
        $bin_names=DB::table('bin_names')->select('name')
            ->whereNotIn('name',$array)
        ->get();
        
        
        return view('createBin')->with('bin_names',$bin_names);
    }
    else{
       return view('auth/login'); 
    } 
}
}
?>