<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function showAllPost(){
        // $data = Http::get('https://jsonplaceholder.typicode.com/posts');
        $data = File::get(storage_path('whatever/LHR_CDG_ADT1_TYPE_1.txt'));
        $data = json_decode($data, TRUE);
        // {{dd($data)}}
        return view('search', compact('data'));
        
    }
}
