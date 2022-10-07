@props(['review'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{ asset('images/BOOKMARKED2black_Vector.png') }}" alt="" />
        <div class="overflow-auto">
            <h3 class="text-2xl">
                <a href="/reviews/{{ $review->id }}">{{ $review->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $review->author }}</div>

            <ul class="flex flex-row flex-wrap">
                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 my-1 text-xs">
                    <a href="/?search={{ $review->media_type }}">{{ $review->media_type }}</a>
                </li>

                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 my-1 text-xs">
                    <a href="/?search={{ $review->genre }}">{{ $review->genre }}</a>
                </li>
                
                <x-review-tags :tagsCsv="$review->tags" />
            </ul>
            <div class="text-lg mt-4">
                <p class="italic truncate text-base">
                    <i class="fa-solid fa-book"></i>
                    {{ $review->summary }}
                </p>
            </div>
        </div>
    </div>
</x-card>
