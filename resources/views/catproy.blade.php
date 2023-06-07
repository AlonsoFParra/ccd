<x-layouts.app title="Proyectos" meta-description="Home meta description">


<div style="width: 400px;  margin:auto; font-family:Verdana; padding: 30px;  " >
<h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Desarrollo de Aplicaciones Web <br> Proyectos</h1>
<br>
@foreach($proyectos as $proyecto)
    <a href="{{$proyecto->ruta}}" class="inline-flex items-center px-4 py-2 text-xs text-white font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky" target="_blank">{{$proyecto->nombre}}</a>
<br> <br>
@endforeach
</div>
</x-layouts.app>