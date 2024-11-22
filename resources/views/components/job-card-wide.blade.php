<x-panel class="gap-x-6">
    <x-employer-logo>
        {{ $slot }}
    </x-employer-logo>
        
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-500">ABC Tech SDN BHD</a>

        <h3 class="font-bold text-xl mt-2 group-hover:text-blue-700 transition-colors duration-200">Fullstack Laravel Developer</h3>
        <p class="text-sm text-gray-500 mt-auto">Full-time $50,000</p>
    </div>

    <div>
        <x-job-tag>Tag</x-job-tag>
        <x-job-tag>Tag</x-job-tag>
        <x-job-tag>Tag</x-job-tag>
    </div>
    
</x-panel>