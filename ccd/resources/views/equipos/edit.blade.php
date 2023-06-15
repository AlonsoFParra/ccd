<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @auth
            <a href="{{route('equipos.create')}}" class="inline-flex items-center px-4 py-2 text-xs text-white font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky">Registrar Equipo</a>
            @endauth
        </h2>
    </x-slot>
    <br>

    <main class="px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800" style="width:700px; margin: auto;">

        <div>
            <label for="carrera" class="flex flex-col">Carrera</label>
            <select name="carrera" class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400">
                <option value="0" selected>Seleccionar</option>
                <option value="1">ING - Desarrollo y Gestión de Software</option>
                <option value="2">TSU - Tecnologías de la Información área Desarrollo de Software Multiplataforma</option>
                <option value="3">ING - Entornos Virtuales y Negocios Digitales</option>
                <option value="4">TSU - Tecnologías de la Información área Entornos Virtuales y Negocios Digitales</option>
            </select>

            <label for="grupo" class="flex flex-col">Grupo</label>
            <select name="grupo" class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400">
                <option value="0" selected>Seleccionar</option>
                <option value="1">1°A</option>
                <option value="2">2°A</option>
            </select>

        </div>
        <br>
        <h1 class="font-mono text-3xl text-center text-sky-600 dark:text-sky-500"> Proyectos Registrados </h1>
        <table class="table">
            <thead><th>Proyecto</th><th></th><th></th></thead> 
            <tbody><td><h2>Red Médica</h2></td><td><a href="" class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200">Editar</a></td><td>     <a href="" class="inline-flex items-center text-xs font-semibold tracking-widest text-center text-red-500 uppercase transition duration-150 ease-in-out dark:text-red-500/80 hover:text-red-600 focus:outline-none">Eliminar</a></td></tbody>
        </table>
        
        <div class="table-responsive">

            <table class="table">
                <thead>
                    <tr>

                        <th>Alumnos en el proyecto</th>

                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($equipos as $equipo)
                    <tr>
                        <td>{{$equipo->alumno->persona->nombre ?? 'Sin Nombre' }}</td>
                        <td>
                            <form action="{{route('equipos.destroy',$equipo)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="inline-flex items-center text-xs font-semibold tracking-widest text-center text-red-500 uppercase transition duration-150 ease-in-out dark:text-red-500/80 hover:text-red-600 focus:outline-none">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </main>
</x-app-layout>