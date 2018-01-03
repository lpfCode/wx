<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Overtrue\LaravelWeChat\Facade;

class WxServerController extends Controller{
   
    //验证微信
    public function index(){

        if(isset($_GET['echostr'])){
            echo $_GET['echostr'];
        }else{
            print_r($_GET);
        }
    }
    public function listPage(){

        return view("wx/index");
    }
}
