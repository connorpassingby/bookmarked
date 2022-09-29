<x-layout>

<a href="/" class="inline-block text-black ml-5 mb-4 text-main"
                ><i class="fa-solid fa-caret-left"></i> Back
            </a>
            <div class="mx-4">
                <div class="bg-gray-50 border border-gray-200 p-10 rounded">
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-48 mr-1 mb-6"
                            src="{{asset('images/BOOKMARKED2black_Vector.png')}}"
                            alt=""
                        />

                        <h3 class="text-2xl mb-2">{{$review->title}}</h3>
                        <div class="text-xl font-bold mb-4">{{$review->author}}</div>
                        <ul class="flex">
                            <li
                                class="bg-main text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="bg-main text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">API</a>
                            </li>
                            <li
                                class="bg-main text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="bg-main text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="mt-6 border border-gray-200 w-full mb-6"></div>
                        <div>
                            <h3 class="text-3xl font-bold mb-4">
                                {{$review->reviewer}}
                            </h3>

                            <div class="text-left text-4xl text-main mb-3">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>

                            <div class="text-lg space-y-6">
                                {{$review->content}}

                                <div class="text-right text-4xl text-main mt-4 mb-3">
                                    <i class="fa-solid fa-quote-right"></i>
                                </div>
                                <a
                                    href="mailto:{{$review->email}}"
                                    class="block bg-main text-white mt-6 py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-envelope"></i>
                                    Communicate with the reviewer</a
                                >
                            </div>

                        </div>
                    </div>
                </div>
            </div>

</x-layout>