<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\Controller;
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
        $articles = Article::orderBy('id', 'ASC')->paginate(10);

        if (empty($articles)) {
            return view('admin.article.index');
        } else {
            return view('admin.article.index', compact('articles'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
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
            'title'     => 'required|string|max:30',
            'thumbnail' => 'required|image|mimes:png,jpeg,jpg',
            'detail'    => 'required'
        ]);

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $thumbnail = time() . Str::slug($request->title) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/articles', $thumbnail);
        }

        Article::create([
            'title'     => $request->title,
            'slug'      => strtolower($request->title),
            'thumbnail' => $thumbnail,
            'excerpt'   => Str::words(strip_tags($request->detail), 10),
            'detail'    => $request->detail,
        ]);

        return redirect()->route('article.index')->with('success', 'Article is successfully saved');
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
        $article = Article::findOrFail($id);

        return view('admin.article.edit', compact('article'));
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
        $this->validate($request, [
            'title'     => 'required|string|max:30',
            'detail'    => 'required'
        ]);

        Article::whereId($id)->update([
            'title'     => $request->title,
            'slug'      => strtolower($request->title),
            'excerpt'   => Str::words(strip_tags($request->detail), 10),
            'detail'    => $request->detail,
        ]);

        return redirect()->route('article.index')->with('success', 'Article is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->back()->with(['success' => 'Article is successfully deleted']);
    }
}
