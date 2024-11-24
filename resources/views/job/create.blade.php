<x-layout>
    <x-page-heading>
        New job
    </x-page-heading>

    <x-forms.form method="POST" action="/jobs/create" enctype="multipart/form-data">
        <x-forms.input name="title" label="Title" placeholder="CEO"></x-forms.input>
        <x-forms.input name="salary" label="Salary" placeholder="$50,000 USD"></x-forms.input>
        <x-forms.input name="location" label="Location" placeholder="Kuala Lumpur"></x-forms.input>
        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>
        <x-forms.input name="url" label="Url" placeholder="https://acme.com/jobs/ceo-wanted"></x-forms.input>
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />
        <x-forms.divider />
        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laracasts, video, education" />
        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>    
</x-layout>