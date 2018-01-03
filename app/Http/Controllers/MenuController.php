<?php
/**
 * Created by PhpStorm.
 * User: yonghu
 * Date: 2018/1/3
 * Time: 下午5:35
 */

namespace App\Http\Controllers;

class MenuController extends Controller{

    public function add(){

        $config = [
            'app_id' => 'wx3cf0f39249eb0xxx',
            'secret' => 'f1c242f4f28f735d4687abb469072xxx',

            'response_type' => 'array',

            'log' => [
                'level' => 'debug',
                'file' => __DIR__.'/wechat.log',
            ],
        ];
        $config = config("wechat.official_account.default.app_id");
        echo $config;
    }

}