@if(session()->has('message'))
    {{-- x-data: Basically when this is initialized, this message will disappear after a certain amount of time --}}
    {{-- Attribute x-init: When it initializes  we use setTimeout() which takes a function --}}
    {{-- Then it takes in a second parameter which is going to be the number of milliseconds where we want to wait until it goes way--}}
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
         class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-laravel text-white px-48 py-3">
        <p>
            {{session('message')}}
        </p>
    </div>
@endif