@extends('layouts.siteLayout')

@section('content')
{{-- this hero into a component so that we can use it else where --}}
<div class="bg-cover bg-center w-full h-[500px] bg-home-image">
    <div class="container mx-auto px-4 flex items-center md:justify-start justify-center h-full">
        <div class="text-left">
            <h1 class="font-amatic text-light text-6xl sm:text-5xl md:text-4xl lg:text-6xl xl:text-7xl mb-4">where love and <br>whiskers meet!</h1>
            <x-primary-button class="font-amatic text-xl lg:text-3xl xl:text-3xl">DISCOVER YOUR PURR-FECT MATCH</x-primary-button>
        </div>
    </div>
</div>

 




@endsection
