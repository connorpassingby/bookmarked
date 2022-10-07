<x-layout>
    @include('partials._hero')
    @include('partials._search')
        <div
                class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
>

@unless(count($reviews) == 0)

@foreach($reviews as $review)
    <x-review-card :review="$review"/>            
@endforeach

@else
<p>No current reviews found</p>
@endunless

</div>

<div class="mt-6 p-4">
    {{$reviews->links()}}
</div>

</x-layout>