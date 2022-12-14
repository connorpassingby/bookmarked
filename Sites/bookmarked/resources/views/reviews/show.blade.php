<x-layout>
    @include('partials._search')

    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                
                <img class="w-48 mx-auto mb-6" src="{{ asset('images/BOOKMARKED2black_Vector.png') }}" alt="" />

                <h3 class="text-3xl mb-2">{{ $review->title }}</h3>
                <div class="text-xl font-bold mb-4">{{ $review->author }}</div>

                <ul class="flex flex-row flex-wrap items-center">
                    <li
                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 my-1 text-xs">
                        <a href="/?search={{ $review->media_type }}">{{ $review->media_type }}</a>
                    </li>

                    <li
                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 my-1 text-xs">
                        <a href="/?search={{ $review->genre }}">{{ $review->genre }}</a>
                    </li>

                    <x-review-tags :tagsCsv="$review->tags" />
                </ul>

                <div class="border border-gray-200 w-full my-6"></div>

                <div class="flex flex-col space-y-10 w-full md:w-8/12">
                    <div class="">
                        <h3 class="text-3xl mb-4">
                            <i class="fa-solid fa-book mr-4"></i> Summary
                        </h3>
                        <div class="text-lg space-y-6 text-justify">
                            {{ $review->summary }}
                        </div>
                    </div>

                    <div class="">
                        <h3 class="text-3xl mb-4">
                            <i class="fa-solid fa-comment mr-4"></i> Review
                        </h3>

                        <div class="flex">

                            <div class="text-left text-4xl text-main self-start">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>

                            <div class="text-lg space-y-6 grow">
                                <div class="w-full md:w-11/12 m-auto">
                                    {{ $review->description }}
                                </div>
                            </div>

                            <div class="text-right text-4xl text-main self-end">
                                <i class="fa-solid fa-quote-right"></i>
                            </div>

                        </div>

                        <div class="text-xl mt-3 mb-4">- {{ $review->user->fname . ' ' . $review->user->minitial . '. ' . $review->user->lname }}</div>
                    </div>
                </div>
            </div>
        </x-card>
    </div>
</x-layout>
