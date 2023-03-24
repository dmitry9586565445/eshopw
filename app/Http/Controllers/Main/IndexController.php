<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Collection;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Barryvdh\Debugbar\Facades\Debugbar;

class IndexController extends Controller
{
    public function index(Request $request): View
    {
        $categories = Category::all();
        $collections = Collection::all();
        $products = Product::all();

        if ($request->ajax())
        {
            $sort = explode('|', $request->sort);
            $products = Product::orderBy(
                in_array($sort[0], ['title', 'price']) ? $sort[0] : 'title',
                in_array($sort[1], ['desc', 'asc']) ? $sort[1] : 'asc'
            )->get();
            return view('ajax.product_card', compact('products'));
        }
        return view('index', compact('categories', 'collections', 'products')); 
    }
}
