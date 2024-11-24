<x-layout>
    <x-section-heading>
        Register
    </x-section-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input name="name" label="Name"></x-forms.input>
        <x-forms.input name="email" label="Email" type="email"></x-forms.input>
        <x-forms.input name="password" label="Password" type="password"></x-forms.input>
        <x-forms.input name="password_confirmation" label="Confirm Password" type="password"></x-forms.input>

        <x-forms.divider></x-forms.divider>

        <x-forms.input name="employer" label="Employer Name"></x-forms.input>
        <x-forms.input name="logo" label="Employer Logo" type="file"></x-forms.input>
        <x-forms.button type="submit">Create account</x-forms.button>

    </x-forms.form>    
</x-layout>