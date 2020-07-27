<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datas = Post::all();
        return view('home', ['datas' => $datas]);
    }
    public function artikel()
    {
        $datas = Post::all();
        return view('artikel', ['datas' => $datas]);
    }
}
