<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function index() {
        return view('reviews.index', [
            'heading'=> 'Latest Reviews',
            'reviews' => Review::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    public function show(Review $review) {
        return view('reviews.show', [
            'review' => $review
        ]);
    }

    public function create() {
        return view('reviews.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title'=>'required',
            'author' => 'required',
            'reviewer' => 'required',
            'media_type'=> 'required',
            'genre'=> 'required',
            'tags' => 'required',
            'summary'=> 'required',
            'description' => 'required'
        ]);

        Review::create($formFields);

        return redirect('/');
    }
}
