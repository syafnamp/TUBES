<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $data = Content::paginate(1);
        return view('content.index',['data'=>$data]);
    }
    public function input()
    {
        return view('content.input');
    }
}
