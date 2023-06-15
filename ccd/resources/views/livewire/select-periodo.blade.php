<div>
<label for="periodo">Periodo</label>
<select class="form-control" name="periodo">
  <option value="0" selected>-- Seleccionar --</option>
  @foreach($periodos as $periodo)
  <option value="{{$periodo->id}}" >{{$periodo->ciclo}} &nbsp;&nbsp;&nbsp;&nbsp;  {{$periodo->nombre}}</option>
  @endforeach
</select>
</div>
