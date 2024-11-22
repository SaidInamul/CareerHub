<x-panel class=" flex-col text-center">
    <div class="self-start text-sm">Company</div>
    <div class="py-8">
        <h3 class="font-bold text-xl group-hover:text-blue-700 transition-colors duration-200">Fullstack Laravel Developer</h3>
        <p class="mt-4 text-sm">Full-time $60,000</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            <x-job-tag size="small">Manager</x-job-tag>
            <x-job-tag size="small">Backend</x-job-tag>
            <x-job-tag size="small">Frontend</x-job-tag>
        </div>

        <x-employer-logo :width="42">
            {{ $slot }}
        </x-employer-logo>
    </div>
</x-panel>