<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //all elements
    public function index() {
        return view('reviews.index', 
        [
            'reviews' => Review::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    //single element
    public function show(Review $review) {
        return view('reviews.show',[
            'review' =>  $review
        ]);
    }
}
