     
     @extends('menu')
     @section('formulario')
     <!-- Formulario -->
   
    <div class="container-fluid d-flex justify-content-center fondo_formulario">
    <form class="container w-75" id="formulario"> 
     
    <div class="mb-3">
      <label for="formGroupExampleInput" class=""> <i class="fa-solid fa-dog "></i> Nombre</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="nombre...">
    </div>
     <div class="mb-3">
      <label for="inputEmail4" class="form-label"><i class="fa-solid fa-envelope"></i> Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="mail@gmail.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label"><i class="fa-regular fa-comment"></i> Comentario</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  placeholder="escriba aquí..."></textarea>
    </div>
    <div class="d-grid ">
    <button class="botonEnviar" type="submit" placeholder="escriba aquí...">Enviar</button>
    </div>
   
  </form>
</div>

@endsection

