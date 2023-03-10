<x-layout>
@include('partials._hero')
@include('partials._search')
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    {{-- <h1>{{$heading}}</h1> --}}
        @if(count($listings))
            @foreach($listings as $listing)
                <x-listing-card :listing="$listing"/>
            @endforeach
        @else
    <p>No listing found</p>
    @endif
</div>
</x-layout>