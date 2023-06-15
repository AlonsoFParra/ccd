<div>
<label for="carrera">Carrera</label>
<select class="form-control" name="carrera" wire:model="id" >
  <option value="value1"selected>-- Seleccionar --</option>
  @foreach($carreras as $carrera)
  <option value="{{$carrera->id}}" >{{$carrera->nombre}}</option>
  @endforeach
</select>
</div>
