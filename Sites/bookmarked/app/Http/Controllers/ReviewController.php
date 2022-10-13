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
            'reviews' => Review::latest()->filter(request(['tag', 'search']))->paginate(4)
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

        $formFields['user_id'] = auth()->id();

        Review::create($formFields);

        return redirect('/')->with('message', 'Your review has been posted!');
    }

    public function edit(Review $review) {
        return view('reviews.edit', ['review' => $review]);
    }

    public function update(Request $request, Review $review) {

        //authenticate logged in user
        if($review->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }
        
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

        $review->update($formFields);

        return redirect('/')->with('message', 'This review has been edited!');
    }

    public function destroy(Review $review) {
        // Make sure logged in user is owner
        if($review->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        $review->delete();
        return redirect('/')->with('message', 'Your post has been deleted!');
    }

    public function manage() {
        return view('reviews.manage', ['reviews' => auth()->user()->reviews()->get()]);
    }
}
