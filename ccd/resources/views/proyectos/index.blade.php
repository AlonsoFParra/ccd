<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @auth
            <a href="{{route('proyectos.create')}}" class="inline-flex items-center px-4 py-2 text-xs text-white font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky">Registrar</a>
            @endauth
        </h2>
    </x-slot>
    <br>
    <main class="grid w-full gap-4 px-5 max-w-7xl sm:grid-cols-2 md:grid-cols-3" style="margin:auto;">
        @foreach($proyectos as $proyecto)
        <div class="flex flex-col max-w-xl px-8 py-4 mx-auto bg-white rounded shadow  h-96 dark:bg-slate-800" style=" height: 150px;width:280px">
            <a href="{{route('proyectos.show',$proyecto->id)}}">
                <h2 class="text-base text-slate-600  dark:text-slate-300  hover:underline">{{$proyecto->nombre }}</h2>
            </a>&nbsp;
            <div class="flex justify-between">
                @auth
                <a href="{{route('proyectos.edit',$proyecto)}}" class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200">Editar</a>&nbsp;
                <form action="{{route('proyectos.destroy',$proyecto)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="inline-flex items-center text-xs font-semibold tracking-widest text-center text-red-500 uppercase transition duration-150 ease-in-out dark:text-red-500/80 hover:text-red-600 focus:outline-none">Eliminar</button>
                </form>
                @endauth
            </div>
        </div>
        @endforeach
    </main>

</x-app-layout>