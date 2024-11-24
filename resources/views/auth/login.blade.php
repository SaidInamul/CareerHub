<x-layout>
    <x-section-heading>
        Log in
    </x-section-heading>

    <x-forms.form method="POST" action="/login">
        <x-forms.input name="email" label="Email" type="email"></x-forms.input>
        <x-forms.input name="password" label="Password" type="password"></x-forms.input>

        <x-forms.button type="submit">Log in</x-forms.button>

    </x-forms.form>    
</x-layout>