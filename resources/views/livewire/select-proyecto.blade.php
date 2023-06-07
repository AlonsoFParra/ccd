<div>
<label for="proyecto">Proyecto</label>
<select class="form-control" name="carrera"  >
  <option value="0"selected>-- Seleccionar --</option>
  @foreach($proyectos as $proyecto)
  <option value="{{$proyecto->id}}" >{{$proyecto->nombre}}</option>
  @endforeach
</select>
</div>
