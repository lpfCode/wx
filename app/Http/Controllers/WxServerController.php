<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Overtrue\LaravelWeChat\Facade;

class WxServerController extends Controller{
   
    //验证微信
    public function index(){

        $config = [
            'debug'   => true,
            'app_id' => config("wechat.official_account.default.app_id"),
            'secret' => config("wechat.official_account.default.secret"),
            'token'   => 'weixin',
            'log' => [
                'level' => 'debug',
                'file'  => '/tmp/wechat.log',
            ],
        ];
        if(isset($_GET['echostr'])){
            echo $_GET['echostr'];
            $app = Facade::officialAccount($config);
            $app->server->push(function ($message){
                return "欢迎关注赶路人";
            });
            $reponse = $app->server->serve();
            return $reponse;
        }else{
            print_r($_GET);
        }
        return view("wx.index");
    }
}
