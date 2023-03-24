@extends('layouts.siteLayout')

@section('content')
{{-- this hero into a component so that we can use it else where --}}
<div class="bg-cover bg-center w-full h-[500px] bg-home-image">
    <div class="container mx-auto px-4 flex items-center justify-start h-full">
        <div class="text-left">
            <h1 class="font-amatic text-secondary text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl mb-4">where love and <br>whiskers meet!</h1>
            <x-primary-button class="font-amatic text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">DISCOVER YOUR PURR-FECT MATCH</x-primary-button>
        </div>
    </div>
</div>

 




@endsection
