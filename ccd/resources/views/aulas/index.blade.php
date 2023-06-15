<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @auth
            <a href="{{route('aulas.create')}}" class="inline-flex items-center px-4 py-2 text-xs text-white font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky">Registrar</a>
            @endauth
        </h2>
    </x-slot>
    <br>
    <main class="max-w-xl text-base px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800" style="margin: auto;" >
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($aulas as $aula)
                    <tr>
                        <td>{{$aula->nombre }}</td>
                        <td>{{$aula->descripcion }}</td>
                        <td><a href="{{route('aulas.edit',$aula)}}" class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200">Editar</a>&nbsp;</td>
                        <td>
                            <form action="{{route('aulas.destroy',$aula)}}" method="post">
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