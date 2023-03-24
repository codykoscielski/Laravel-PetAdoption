<h2 {{ $attributes->merge(['class' => 'font-amatic text-secondary text-5xl text-center mt-3 mb-2']) }}>
    {{ $slot }}
</h2>
<div {{ $attributes->merge([ 'class' => 'h-[3px] w-[40%] bg-secondary mx-auto mb-3']) }}></div>