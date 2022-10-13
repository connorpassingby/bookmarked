<x-layout>
<x-card class="p-10 rounded max-w-lg mx-auto mt-24 bg-form border-white rounded-[50px]">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Modify post
        </h2>
        <p class="mb-4">Edit: {{$review->title}}</p>
    </header>

    <form method="POST" action="/reviews/{{$review->id}}">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Title</label>
                <input type="text" class="border border-gray-200 rounded-[50px] bg-input px-4 p-2 w-full" name="title"
                    placeholder="Example: Les Miserables" 
                    value="{{$review->title}}"/>

                @error('title')
                    <p class="text-red-500 text-cs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="author" class="inline-block text-lg mb-2">Author</label>
                <input type="text" class="border border-gray-200 rounded-[50px] bg-input px-4 p-2 w-full" name="author"
                    placeholder="Example: Victor Hugo"
                    value="{{$review->author}}" />


                @error('author')
                    <p class="text-red-500 text-cs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="media_type" class="inline-block text-lg mb-2">Media Type</label>
                <input type="text" class="border border-gray-200 rounded-[50px] bg-input px-4 p-2 w-full" name="media_type"
                    placeholder="Example: Novel" 
                    value="{{$review->media_type}}"/>


                @error('media_type')
                    <p class="text-red-500 text-cs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="genre" class="inline-block text-lg mb-2">Genre</label>
                <input type="text" class="border border-gray-200 rounded-[50px] bg-input px-4 p-2 w-full" name="genre"
                    placeholder="Example: Historical Fiction" 
                    value="{{$review->genre}}"/>


                @error('genre')
                    <p class="text-red-500 text-cs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded-[50px] bg-input px-4 p-2 w-full" name="tags"
                    placeholder="Example: Major Character Death, Graphic Violence, etc." 
                    value="{{$review->tags}}"/>

                @error('tags')
                    <p class="text-red-500 text-cs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- {{-- <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Company Logo
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
            </div> --}} -->

            <div class="mb-6">
                <label for="summary" class="inline-block text-lg mb-2">
                    Summary
                </label>
                <textarea class="border border-gray-200 rounded-[50px] bg-input p-5 w-full" name="summary" rows="10"
                    placeholder="Example:&#10 &#10Jean Valjean, a former criminal, gets a second chance at an honest life. Under the alias of 'Monsieur Madeleine', he rises to great heights as the mayor of Montreuil-sur-Mer and even starts a family. However, his past returns to haunt him as his identity as a criminal is uncovered. Les Miserables is the story of one man's chance at redemption and reconciliation with family amidst the turmoil of the French Revolution."
                    >{{$review->summary}}</textarea>

                @error('summary')
                    <p class="text-red-500 text-cs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="reviewer" class="inline-block text-lg mb-2">Reviewer</label>
                <input type="text" class="border border-gray-200 rounded-[50px] bg-input px-4 p-2 w-full" name="reviewer"
                    placeholder="Put your name here!" 
                    value="{{$review->reviewer}}"/>

                @error('reviewer')
                    <p class="text-red-500 text-cs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Review
                </label>
                <textarea class="border border-gray-200 rounded-[50px] bg-input p-5 w-full" name="description" rows="10"
                    placeholder="Example: &#10&#10Les Miserables is a good story but why did the author have to kill off all the major characters? Furthermore, what was the point of describing the Parisian sewers in great detail? It's not relevant at all to the story or to the setting..."
                    >
                    {{$review->description}}
                </textarea>

                @error('description')
                    <p class="text-red-500 text-cs mt-1">
                        {{ $message }}
                    </p>
                @enderror
        </div>

        <div class="mb-6">
            <button class="bg-main text-white rounded py-2 px-4 hover:bg-hover">
                Update your bookmark
            </button>

            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
</x-card>
</x-layout>