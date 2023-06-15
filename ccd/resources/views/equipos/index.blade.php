<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @auth
            <a href="{{route('equipos.create')}}" class="inline-flex items-center px-4 py-2 text-xs text-white font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky">Registrar</a>
            @endauth
        </h2>
    </x-slot>
    <br>
    <main class="px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800" style="width:700px; margin: auto;">
        <livewire:select-grupo />

        <br>
        <table class="table">
            <thead>
                <th colspan="3">Equipos Registrados en el Grupo</th>
            </thead>
            <tbody>
                <tr>
                    <td>Red Médica</td>
                    <td><a href="" class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200">Editar</a></td>
                    <td><a href="" class="inline-flex items-center text-xs font-semibold tracking-widest text-center text-red-500 uppercase transition duration-150 ease-in-out dark:text-red-500/80 hover:text-red-600 focus:outline-none">Eliminar</a></td>
                </tr>
                <tr>
                    <td>Productos Plásticos</td>
                    <td><a href="" class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200">Editar</a></td>
                    <td><a href="" class="inline-flex items-center text-xs font-semibold tracking-widest text-center text-red-500 uppercase transition duration-150 ease-in-out dark:text-red-500/80 hover:text-red-600 focus:outline-none">Eliminar</a></td>
                </tr>
            </tbody>
        </table>
    </main>
</x-app-layout>