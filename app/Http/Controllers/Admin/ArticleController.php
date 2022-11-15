<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $articles = Article::with('user')->latest()->paginate(5); 
        // dd($articles);

        return view('admin.articles.index', [
            'articles' => Article::with('user')->latest()->paginate(5) 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'         => 'required|min:5',
            'image'         => 'required|image|mimes:png,jpg|max:2048',
            'description'   => 'required|min:10',
            'slug'          => 'required|unique:articles'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/articles', $image->hashName());

        Article::create([
            'title'         => $request->title,
            'image'         => $image->hashName(),
            'description'   => $request->description,
            'slug'          => Str::slug($request->title, '-'),
            'user_id'       => auth()->user()->id,
        ]);

        return redirect()->route('admin.articles.index')->with(['success' => 'Data Success Saved!']);
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
    }
}
