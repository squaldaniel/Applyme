<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $var1= [2, 15, 17, 30, 33, 45];
        $var2= [1, 2, 3, 4, 5, 7, 8, 9, 10, 13, 20, 21, 22, 23, 24];
        $var3= [83];
        $var4= [9, 10, 11, 12, 17, 18, 19, 20];
        $var5= [1 , 2 , 4 , 6 , 7 , 8 , 9 , 13 , 15 , 17 , 19 , 20 , 21 , 23 , 25];
        $var6= [10, 3, 41, 13, 43, 44, 13];
        $var7= [1 , 5 , 6 , 7 , 9 , 10 , 11 , 14 , 15 , 18 , 19 , 21 , 22 , 24 , 25];
        $unique = array_unique(array_merge($var1, $var2, $var3, $var4, $var5, $var6, $var7));
        return $unique;
    }
}
