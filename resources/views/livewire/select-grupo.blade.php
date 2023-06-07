<div>
<label for="carrera">Carrera</label>
<select class="form-control" name="carrera" wire:model="id" >
  <option value="value1"selected>-- Seleccionar --</option>
  @foreach($carreras as $carrera)
  <option value="{{$carrera->id}}" >{{$carrera->nombre}}</option>
  @endforeach
</select>
<label for="grupo">Grupo</label>
<select class="form-control" name="grupo" wire:model="carrera_id" >
    @if ($grupos->count()==0)
  <option value=""selected>-- Debe seleccionar una carrera antes --</option>
  @endif
  @foreach($grupos as $grupo)
  <option value="{{$grupo->id}}" >{{$grupo->grado}}°{{$grupo->grupo}}</option>
  @endforeach
</select>
</div>
