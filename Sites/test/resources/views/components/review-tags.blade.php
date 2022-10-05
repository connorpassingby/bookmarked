@props(['review_tags'])

@php
    $tags = explode(',',$review_tags);
@endphp

<ul class="flex">
    @foreach($tags as $tag)
    <li class="flex items-center justify-center bg-main text-white rounded-xl py-1 px-3 mr-2 text-xs">
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
</ul>