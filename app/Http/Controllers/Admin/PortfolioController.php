<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::orderBy('id', 'ASC')->paginate(10);

        if (empty($portfolios)) {
            return view('admin.portfolio.index');
        } else {
            return view('admin.portfolio.index', compact('portfolios'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
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
            'name'          => 'required|string|max:30',
            'image'         => 'required|image|mimes:png,jpeg,jpg',
            'size'          => 'required',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/portfolios', $image);
        }

        Portfolio::create([
            'name'          => $request->name,
            'image'         => $image,
            'size'          => $request->size,
        ]);

        return redirect()->route('portfolio.index')->with('success', 'Portfolio is successfully saved');
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
        $portfolio = Portfolio::findOrFail($id);

        return view('admin.portfolio.edit', compact('portfolio'));
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
            'name'          => 'required|string|max:30',
            'size'          => 'required',
        ]);

        Portfolio::whereId($id)->update([
            'name'          => $request->name,
            'size'          => $request->size,
        ]);

        return redirect()->route('portfolio.index')->with('success', 'Portfolio is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();
        return redirect()->back()->with(['success' => 'Portfolio is successfully deleted']);
    }
}
