<x-layout>
    @include('partials._hero')
    @include('partials._search')
        <div
                class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
>

@unless(count($reviews) == 0)

@foreach($reviews as $review)
<div class="bg-gray-50 border border-gray-200 rounded p-6">
        <div class="flex">
                        <img
                            class="hidden h-20 w-48 mr-8 mt-10 md:block"
                            src="images/BOOKMARKED2black_Vector.png"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="/reviews/{{$review->id}}">{{$review->title}}</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">{{$review->author}}</div>
                            <ul class="flex">
                                <li
                                    class="flex items-center justify-center bg-main text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Romance</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-main text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Thriller</a>
                                </li>
                            </ul>
                            <div class="text-lg mt-4 indent-8">
                                    {{$review->content}} 
                            </div>

                            <div class="text-lg text-right mt-4 italic">
                                - <b>{{$review->reviewer}}</b>
                            </div>

                            <div class="text-lg mt-4">
                                    {{$review->rating}}
                            </div>
                        </div>
                    </div>
                </div>               
@endforeach

@else
<p>No listings found</p>
@endunless

</div>

</x-layout>