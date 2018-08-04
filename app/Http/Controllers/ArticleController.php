<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $count = Article::count();
        $article =Article::paginate(3);
        return view('article.index' ,compact('count' , 'article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validated_data = $request->validate([
            'file' => 'required|image',
            'title' => 'required|string|',
            'body' => 'required|string|min:15'
        ]);
        $imageName = $request->title. '.' .$request->file->getClientOriginalExtension();
       
        Article::create([
            'title' => $validated_data['title'],
            'body'  => $validated_data['body'],
            'image' => $imageName,
            'department' => \Auth::user()->department,
            'author_id' => \Auth::id()
        ]);
        $request->file->move(public_path('image/article'), $imageName);

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $article = Article::findOrFail($id);

        return view('article.show' , compact('article'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $article =Article::where('id' , $id)->first();

        return view('article.edit' , compact('article'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $validated_data = $request->validate([  
            'title' => 'required|string|',
            'body' => 'required|string|min:15'
        ]);
        $article = Article::where('id' , $id)->first();
        
        $article->title = $request->title;
        $article->body  = $request->body;
        if(!is_null($request->file)){
            $image = "image/article/$article->image";
            if(\File::exists($image)){
                \File::delete($image);  
            }
            $imageName = $request->title . '.' . $request->file->getClientOriginalExtension();
            $request->file->move(public_path('image/article/') , $imageName);
        }
        $article->save();
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $article =Article::findOrFail($id);
        $image = "image/article/$article->image";
        if(\File::exists($image)){
            \File::delete($image);
        }
        $article->delete();

        return redirect()->route('articles.index');
    }
}
