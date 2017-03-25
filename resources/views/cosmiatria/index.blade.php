@extends('layout')
@section('contacto')
<div class="contact">
      <input type="text" class="contact-input" name="name" id="nombre" value="nombre"/>
      <input type="email" class="contact-input" name="mail" id="mail" value="Email"/>
      <input type="date" class="contact-input" name="fecha" id="fecha" value="fecha"/>
      <div class="form-group">
            <h2>Select</h2>
            <select class="form-control">
                @foreach ($servicios as $servicios)
                <option>{{ $servicios->nombre}}</option>
                @endforeach
            </select>
        </div>
      <div class="button-link"><a href="#">Enviar</a></div>
</div>
@endsection
