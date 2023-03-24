<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Collection;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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
            $products = Product::where(
                in_array($sort[0], ['name', 'price']) ? $sort[0] : 'name',
                in_array($sort[1], ['desc', 'asc']) ? $sort[1] : 'asc'
            )->get();
            return view('ajax.product_card', compact('products'));
        }
        return view('index', compact('categories', 'collections', 'products')); 
    }
}
