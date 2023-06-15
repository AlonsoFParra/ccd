<x-app-layout>
    
<h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500"> {{$proyecto->id}}</h1>
<h2 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">{{$proyecto->nombre}}</h2> 
<div class="flex flex-col max-w-xl px-8 py-4 mx-auto bg-white rounded shadow  dark:bg-slate-800" style="text-align: justify;">
    <p class="flex-1 leading-normal text-slate-600 dark:text-slate-400">{{$proyecto->descripcion}}</p>
<br> <a href="{{ route('proyectos.index') }}" class="mr-auto text-sm font-semibold underline border-2 border-transparent rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none">Regresar</a>
</div>
<br> 


</x-app-layout>