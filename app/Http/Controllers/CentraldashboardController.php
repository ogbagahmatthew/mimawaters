<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CentraldashboardController extends Controller
{
    //
    public function index(){
        $priviledge_id = Auth::User()->priviledge_id;
        if($priviledge_id == 3){
            return view('Dashboard/directors');
        }
        elseif($priviledge_id == 1){
            return view('Dashboard/admin');

        }
        elseif($priviledge_id == 2){
            return view('Dashboard/sales');

        }
        
    }
}
