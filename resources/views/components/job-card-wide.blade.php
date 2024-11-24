@props(['job'])

<x-panel class="gap-x-6">
    <x-employer-logo :$job>
        {{ $slot }}
    </x-employer-logo>
        
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-500">{{ $job->employer->name }}</a>

        <h3 class="font-bold text-xl mt-2 group-hover:text-blue-700 transition-colors duration-200">{{ $job->title }}</h3>
        <p class="text-sm text-gray-500 mt-auto">{{ $job->schedule }} {{ $job->salary }}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
            <x-job-tag :$tag></x-job-tag>
        @endforeach
    </div>
    
</x-panel>