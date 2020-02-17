<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    public function getKey(){
        $redis = new Redis();
        Redis::set('key','value');
        var_dump(Redis::get('key'));
        Redis::setRange('key',4,"abcde");
        var_dump(Redis::getRange('key',0,6));
        //echo phpinfo();
    }
}
