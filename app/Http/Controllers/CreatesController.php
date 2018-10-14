<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;
class CreatesController extends Controller
{
    public function home(){
    	$articles = Article::paginate(3);

    	return view('welcome', compact('articles'));
    }

    public function create(Request $request){

      $this->validate($request,[
      	'title'=>'required',
      	'description'=>'required'
      	]);

      $articles = Article::create($request->all());

      return redirect('/')->with('success','Post Added successfully');
    }

    public function update ($id){
    	$articles = Article::find($id);
    	return view('update', compact('articles'));
    }

    public function edit(Request $request, $id){
    	$this->validate($request,[
	      	'title'=>'required',
	      	'description'=>'required'
      	]);

      

		Article::where('id', $id)->update([
				'title' => $request->title,
				'description'=> $request->description
			]);
		return redirect('/')->with('success','Post updated successfully');
    }
    public function delete($id){
    	Article::where('id', $id)->delete();
    	return redirect('/')->with('success','Post Deleted successfully');
    }
    public function read($id){
    	$articles = Article::find($id);
    	return view('read', compact('articles'));
    }
}
