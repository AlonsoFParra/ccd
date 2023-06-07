<x-app-layout>
    <br>
    <form action="{{route('equipos.store')}}" method="post" class="px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800" style="width:700px">
    <h1 class="font-mono text-3xl text-center text-sky-600 dark:text-sky-500">Registro de equipos</h1>
        @csrf
        @include('equipos.form-fields')                
        <div class="table-responsive"> 
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="5">Alumnos del grupo sin asignación a equipo</th>                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($alumnos as $alumno)
                    <tr>
                        <td><input type="checkbox" id="id"></td>                        
                        <td>{{$alumno->matricula ?? 'Sin Matricula' }}</td>                        
                        <td>{{$alumno->persona->apellido_pat ?? 'Sin Nombre' }}</td>
                        <td>{{$alumno->persona->apellido_mat ?? 'Sin Apellido' }}</td>
                        <td>{{$alumno->persona->nombre ?? 'Sin Apellido' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
       <div class="flex items-center justify-between mt-4">
            <button type="submit" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center  uppercase transition duration-150  text-white ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800  hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500">Registrar Equipo</button>
            <a class="text-sm font-semibold underline border-2 border-transparent rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none" href="{{ route('equipos.index') }}">Regresar</a>
        </div>
    </form>
</x-app-layout>