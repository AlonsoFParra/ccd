<div class="mt-4">
<label for="tipo">Tipo de Usuario</label>
<select class="block mt-1 w-full"" name="tipo" wire:model="tipo_id" >
  <option value="0"selected>-- Seleccionar --</option>
  @foreach($tipos as $tipo)
  <option value="{{$tipo->id}}" >{{$tipo->nombre}}</option>
  @endforeach
</select>
</div>
