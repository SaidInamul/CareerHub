@props(['job', 'width' => 90])

<img src="{{ Vite::asset('storage/app/private/' . $job->employer->logo) }}" alt="" class="rounded-xl" style="width: {{ $width }}px; height: {{ $width }}px;">