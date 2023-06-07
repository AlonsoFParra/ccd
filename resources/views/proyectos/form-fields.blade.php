<label for="nombre" class="flex flex-col">Nombre</label>
<input type="text" id="nombre" name="nombre" value="{{old('nombre',$proyecto->nombre)}}" style="width:100%" class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400"><br>
@error('nombre')
<br>
<small style="color: red;">{{$message}}</small>
@enderror


<label for="ruta" class="flex flex-col">URL</label>
<input type="url" name="ruta" style="width:100%" value="{{old('ruta', $proyecto->ruta)}}"class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400">
@error('ruta')
<br>
<small style="color: red;">{{$message}}</small>
@enderror

<label for="descripcion" class="flex flex-col">Descripción</label>
<textarea  style="width:100%" class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="descripcion">{{old('descripcion', $proyecto->descripcion)}}</textarea>
@error('descripcion')
<br>
<small style="color: red;">{{$message}}</small>
@enderror