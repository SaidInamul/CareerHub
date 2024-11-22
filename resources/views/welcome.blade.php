<x-layout>
    <div class="space-y-10 ">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl mb-6">Let's find your next job</h1>
            <form action="" class="">
                <input type="text" placeholder="Web Developer..." class="rounded-xl border border-white/10 bg-white/5 w-full max-w-xl px-5 py-4 hover:bg-white/10 transition-colors duration-300">
            </form>
        </section>

        <section class="pt-10">
            <x-section-heading>Featured jobs</x-section-heading>
    
            <div class="grid lg:grid-cols-3 gap-8">
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>
    
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1 ">
                <x-job-tag>Backend</x-job-tag>
                <x-job-tag>Frontend</x-job-tag>
                <x-job-tag>Backend</x-job-tag>
                <x-job-tag>Frontend</x-job-tag>
                <x-job-tag>Backend</x-job-tag>
                <x-job-tag>Frontend</x-job-tag>
                <x-job-tag>Backend</x-job-tag>
                <x-job-tag>Frontend</x-job-tag>
                <x-job-tag>Backend</x-job-tag>
            </div>
        </section>
    
        <section>
            <x-section-heading>Recent jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
            </div>
        </section>

    </div>
</x-layout>