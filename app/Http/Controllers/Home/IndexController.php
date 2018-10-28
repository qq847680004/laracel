<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
//    public function index($id, Request $request)
//    {
////        echo $request->input('id');
//        echo $id;
//        echo $request->input('name');
//
//
//    }

    public function index()
    {
        $assign = [
            'title' => '文章标题',
            'content' => '文章内容'
        ];
        return view('home.index.index', $assign);
    }
}
