<x-layout>
<x-card class="p-10 rounded max-w-lg mx-auto mt-24 bg-form border-white rounded-[50px]">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
             Share us your thoughts!
        </h2>
        <p class="mb-4">Fill up the form below to post a book review</p>
    </header>

    <form method="POST" action="/reviews">
        @csrf
        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Book Title</label>
            <input type="text" class="border border-gray-200 rounded-[50px] bg-input p-2 px-4 w-full" name="title"/>
        
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        
        </div>

        <div class="mb-6">
            <label for="author" class="inline-block text-lg mb-2">Author</label>
            <input type="text" class="border border-gray-200  rounded-[50px] bg-input p-2 px-4 w-full" name="author"/>

            @error('author')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">
                Tags (Comma Separated)
            </label>
            <input type="text" class="border border-gray-200  rounded-[50px] bg-input p-2 px-4 w-full" name="tags" placeholder="e.g. romance, horror, thriller, etc." />
           
            @error('tags')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="reviewer" class="inline-block text-lg mb-2">Username</label>
            <input type="text" class="border border-gray-200  rounded-[50px] bg-input p-2 px-4 w-full" name="reviewer"  placeholder="Username will be displayed as review's creator"/>

            @error('reviewer')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2">Email</label>
            <input type="email" class="border border-gray-200  rounded-[50px] bg-input p-2 px-4 w-full" name="email"/>

            @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="rating" class="inline-block text-lg mb-2">Rating <i>( _ / 5)</i></label>
            <input type="text" class="border border-gray-200  rounded-[50px] bg-input p-2 px-4 w-full" name="rating" placeholder="1 is lowest, 5 is highest"/>

            @error('rating')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        
        <!-- <div class="mb-6">
            <label for="preview" class="inline-block text-lg mb-2">
                Book preview
            </label>
            <input type="file" class="border border-gray-200  rounded-[50px] bg-input p-2 w-full" name="preview" />
        </div> -->

        <div class="mb-6">
            <label for="content" class="inline-block text-lg mb-2">
                Content
            </label>
            <textarea class="border border-gray-200 rounded-[35px] p-2 px-6 w-full" name="content" rows="10" ></textarea>

            @error('content')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button class="bg-main text-white rounded py-2 px-4 hover:bg-hover">
                Post
            </button>

            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
</x-card>
</x-layout>