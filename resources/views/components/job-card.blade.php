@props(['job'])

<x-panel class=" flex-col text-center">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8">
        <h3 class="font-bold text-xl group-hover:text-blue-700 transition-colors duration-200">{{ $job->title }}</h3>
        <p class="mt-4 text-sm">{{ $job->schedule }} {{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-job-tag size="small" :$tag></x-job-tag>
            @endforeach
        </div>

        <x-employer-logo :width="42" :$job>
            {{ $slot }}
        </x-employer-logo>
    </div>
</x-panel>