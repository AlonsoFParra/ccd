<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @auth
            <a href="{{route('grupos.create')}}" class="inline-flex items-center px-4 py-2 text-xs text-white font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky">Registrar</a>&nbsp;&nbsp;&nbsp;&nbsp;
            @endauth
        </h2>
    </x-slot>
    <br>
    <main class="max-w-5xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800" style="margin: auto;">
        <livewire:select-periodo />
        <livewire:select-carrera />
        <livewire:table-grupo />         
    </main>
</x-app-layout>