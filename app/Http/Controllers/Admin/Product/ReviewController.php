<?php

namespace App\Http\Controllers\Admin\Product;

use App\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function __construct ()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $reviews = Review::latest()->paginate(10);
        //return $reviews;
        return view('admin.review.index', compact('reviews'));
    }
}
