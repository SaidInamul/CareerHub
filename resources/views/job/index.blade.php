<x-layout>
    <div class="space-y-10 ">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl mb-6">Let's find your next job</h1>
            {{-- <form action="" class="">
                <input type="text" placeholder="Web Developer..." class="rounded-xl border border-white/10 bg-white/5 w-full max-w-xl px-5 py-4 hover:bg-white/10 transition-colors duration-300">
            </form> --}}

            <x-forms.form action="/search">
                <x-forms.input placeholder="Web Developer..." name="search" :label=false class="mt-3"></x-forms.input>
            </x-forms.form>
        </section>

        <section class="pt-10">
            <x-section-heading>Featured jobs</x-section-heading>
    
            <div class="grid lg:grid-cols-3 gap-8">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job></x-job-card>
                @endforeach
            </div>
        </section>
    
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1 ">
                @foreach ($tags as $tag)
                    <x-job-tag :$tag></x-job-tag>
                @endforeach
            </div>
        </section>
    
        <section>
            <x-section-heading>Recent jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($unFeaturedJobs as $job)
                    <x-job-card-wide :$job></x-job-card-wide>
                @endforeach
            </div>
        </section>

    </div>
</x-layout>