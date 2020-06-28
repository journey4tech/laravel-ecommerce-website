<?php

namespace App\Http\Controllers\Admin\Product;

use App\Helpers\Helper;
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

    public function show($id){
        $review = Review::findOrFail($id);


        return view('admin.review.view',compact('review'));
    }

    public function changeStatus(Request $request)
    {
        $review = Review::findOrFail($request->review_id);
        $review->status = $request->status;
        $review->save();
        Helper::notifySuccess('Review status Updated');
        return redirect()->back();
    }

    public function destroy($id){
        $review = Review::findOrFail($id);
        $review->delete();
        Helper::notifySuccess('Review deleted  successfully');
        return redirect()->route('admin.reviews.index');
    }
}
