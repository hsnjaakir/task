<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class PostController extends Controller
{
    public function showAllPost(){
        $data = Http::get('https://jsonplaceholder.typicode.com/posts');
        $data = json_decode($data, TRUE);
        return view('search', compact('data'));
    }
}
