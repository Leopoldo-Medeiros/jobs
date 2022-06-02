@props(['listing'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block"
             src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" />
        <div>
            <h3 class="text-2xl">
                <!-- Eloquent syntax for $listing->title -->
                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->company}}</div>

            <!-- Result: Now we are able to click on the tag and filter to what word there's on that tag. -->
            <x-listing-tags :tagsCsv="$listing->tags"></x-listing-tags>

            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>{{$listing->location}}
            </div>
        </div>
    </div>
</x-card>