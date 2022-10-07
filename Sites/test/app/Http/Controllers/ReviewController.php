<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ReviewController extends Controller
{
    //all elements
    public function index() {
        return view('reviews.index', 
        [
            'reviews' => Review::latest()->filter(request(['tag', 'search']))->paginate(4)
        ]);
    }

    //single element
    public function show(Review $review) {
        return view('reviews.show',[
            'review' =>  $review
        ]);
    }

    //create form
    public function create() {
        return view('reviews.create');
    }

    //create new record
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'tags' => 'required',
            'content' => 'required',
            'reviewer' => 'required',
            'rating' => 'required',
            'email'=> ['email', 'required']
        ]);

        $formFields['user_id'] = auth()->id();

        Review::create($formFields);

        return redirect('/')->with('message', 'Your review has been posted!');
    }

    public function edit(Review $review) {
        return view('reviews.edit', ['review' => $review]);
    }

    //update a record
    public function update(Request $request, Review $review) {

        //authenticate logged in user
        if($review->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }
        
        $formFields = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'tags' => 'required',
            'content' => 'required',
            'reviewer' => 'required',
            'rating' => 'required',
            'email'=> ['email', 'required']
        ]);

        $formFields['user_id'] = auth()->id();

        $review->update($formFields);

        return redirect('/')->with('message', 'This review has been edited!');
    }

    //delete a record
    public function destroy(Review $review) {
        // Make sure logged in user is owner
        if($review->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        $review->delete();
        return redirect('/')->with('message', 'Your post has been deleted!');
    }

    //manage reviews
    public function manage() {
        return view('reviews.manage', ['reviews' => auth()->user()->reviews()->get()]);
    }
}


