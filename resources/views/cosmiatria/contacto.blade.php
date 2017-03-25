<div class="contact">
      <input type="text" class="contact-input" name="name" id="nombre" value="nombre"/>
      <input type="email" class="contact-input" name="mail" id="mail" value="Email"/>
      <input type="date" class="contact-input" name="fecha" id="fecha" value="fecha"/>




      <input type="text" class="contact-input" name="name" id="name" value="Servicio"/>
      <div class="button-link"><a href="#">Enviar</a></div>
</div>

<div class="contact-input">
      <h2>Select</h2>
      <select class="form-control">
          @foreach ($servicios as $servicios)
          <option>{{ $servicios->nombre}}</option>
          @endforeach
      </select>
  </div>
