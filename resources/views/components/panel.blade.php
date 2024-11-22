@php
    $classes = 'flex p-4 bg-white/5 border border-transparent rounded-xl hover:border-blue-800 transition-colors duration-300 group'
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>