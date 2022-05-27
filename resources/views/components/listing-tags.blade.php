@props(['tagsCsv'])

{{--It's going to turn that comma separated value list
    into an array and put it into this variable--}}
@php
    /** @var TYPE_NAME $tagsCsv */
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
    @foreach($tags as $tag)
        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            <a href="/?tag={{$tag}}">{{$tag}}</a>
        </li>
    @endforeach
</ul>