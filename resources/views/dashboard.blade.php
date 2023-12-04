<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-form post :action="route('question.store')">

                <x-textarea label='question' name='question' />

                <x-btn.primary>Save</x-btn.primary>

                <x-btn.reset>Cancel</x-btn.reset>

            </x-form>

            {{-- <br/> --}}

            <hr class="border-gray-400">
            <br />

            {{-- listagem --}}

            <div class="dark:text-gray-200 text-xl mb-4">List of questions:</div>

            <div class="space-y-4">
                @foreach ($questions as $q)
                    <x-question :question="$q" />
                @endforeach

            </div>
        </div>
    </div>

</x-app-layout>
