<section
            class="relative h-72 bg-main flex flex-col justify-center align-center text-center space-y-4 mb-4"
        >
            <div
                class="absolute top-0 left-0 w-full h-full opacity-40 bg-repeat-x bg-center"
                style="background-image: url('images/blueOverlay.jpg')"
            ></div>

            <div class="z-10">
                <!-- <h1 class="text-6xl font-bold uppercase text-white">
                    BOOK<span class="text-main">MARKED</span>
                </h1> -->
                <img class="h-15 w-[500px] mx-auto d-block" src="/images/BOOKMARKEDwhite_Vector.png" alt="" class="logo"/>
                <p class="text-2xl text-gray-200 font-bold my-4">
                    Your trusted book review platform!
                </p>
                @auth
                @else
                <div>
                    <a
                        href="/register"
                        class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:bg-hover hover:text-white hover:border-none"
                        >Sign Up to post a Review</a
                    >
                </div>
            </div>
        @endauth
</section>