<x-app-layout>
<h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Registro de aulas</h1>
<form action="{{route('aulas.store')}}" method="post" class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800">
    @csrf
    @include('aulas.form-fields')
    <div class="flex items-center justify-between mt-4">
    <button type="submit" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center  uppercase transition duration-150  text-white ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800  hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500">Enviar</button>
    <a class="text-sm font-semibold underline border-2 border-transparent rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none" href="{{ route('aulas.index') }}">Regresar</a>
</div>

</form>
</x-app-layout>