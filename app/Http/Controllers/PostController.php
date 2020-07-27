<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //Menampilkan data post
    public function index(){
        $datas = Post::all();
        return view('post.index', ['datas' => $datas]);
    }
    //Membuat Artikel baru
    public function create(Request $request){
        $this->validate($request,[
            'title' => 'required|max:150',
            'author' => 'required',
            'content' => 'required',
            'excerpt' => 'required|max:300',
        ]);

        if($request->has('draft')){
            $status = 'draft';
        }else{
            $status = 'published';
        }

    

        $data = Post::create(array_merge($request->all(),
            [
                'status' => $status,
                'published_at' => Carbon::create($request->published_at),
                'created_by' => Auth::id(),
                'excerpt' => $request->excerpt,
            ]
        )); 
    
   
        return redirect()->back();
   
    
    }
    //Mengubah Artikel
    public function update($id){
        $datas = Post::findOrFail($id);

        return view('post.update',['datas' => $datas]);
    }
    //Menyimpan Artikel
    public function store(Request $request){
        $data = Post::findOrFail($request->id);

        $this->validate($request,[
            'title' => 'required|max:150',
            'author' => 'required',
            'content' => 'required',
            'excerpt' => 'required|max:300',
        ]);

        if($request->has('draft')){
            $status = 'draft';
        }else{
            $status = 'published';
        }
      

        $data->update(array_merge($request->all(),
            [
                'status' => $status,
                'published_at' => Carbon::create($request->published_at),
                'created_by' => Auth::id(),
                'excerpt' => $request->excerpt,
               
            ]
        ));

        return redirect()->route('post_index');
    }

    //Menghapus Artikel
    public function delete(Request $request){
        $data = Post::findOrFail($request->id);
        $data->delete();
        return redirect()->route('post_index');
    }
}
