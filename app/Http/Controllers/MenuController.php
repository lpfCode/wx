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

//        $config = config("wechat.official_account.default.app_id");
//        echo $config;

        $config = [
            'app_id' => config("wechat.official_account.default.app_id"),
            'secret' => config("wechat.official_account.default.secret"),

            'response_type' => 'array',

            'log' => [
                'level' => 'debug',
                'file' => __DIR__.'/wechat.log',
            ],
        ];
    }

}