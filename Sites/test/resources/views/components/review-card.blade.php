@props(['review'])

<x-card>
    <div class="flex">
        <img class="hidden h-20 w-48 mr-8 mt-10 md:block" src="images/BOOKMARKED2black_Vector.png" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/reviews/{{$review->id}}">{{$review->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$review->author}}</div>
            <x-review-tags :review_tags="$review->tags"/>
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
</x-card>