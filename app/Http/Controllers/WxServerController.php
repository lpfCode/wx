<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WxServerController extends Controller{
   
    //验证微信
    public function index(){
        if(isset($_GET['echostr'])){
            echo $_GET['echostr'];
            exit;
        }else{ 
            print_r($_GET);
        }   
    }
}
