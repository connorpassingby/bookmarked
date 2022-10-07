@props(['tagsCsv'])

{{-- tagsCsv because its gonna come from the database as a Comma Separated Value --}}

@php
$tags = explode(',', $tagsCsv);
@endphp

@foreach ($tags as $tag)
    <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 my-1 text-xs">
        <a href="/?tag={{ $tag }}">{{ $tag }}</a>
    </li>
@endforeach
