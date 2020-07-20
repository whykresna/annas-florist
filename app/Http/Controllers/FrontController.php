<?php

namespace App\Http\Controllers;

use App\Article;
use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function showArticle()
    {
        $articles = Article::orderBy('updated_at', 'DESC')->paginate(6);
        if (empty($articles)) {
            return view('blog');
        } else {
            return view('blog', compact('articles'));
        }
    }

    public function showArticleDetail($slug)
    {
        $article = Article::where('slug', $slug)->first();
        return view('blog-detail', compact('article'));
    }

    public function showProduct()
    {
        $products = Product::orderBy('updated_at', 'DESC')->paginate(9);
        if (empty($products)) {
            return view('shop');
        } else {
            return view('shop', compact('products'));
        }
    }

    public function showProductDetail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('shop-detail', compact('product'));
    }
}
