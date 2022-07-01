@extends('menu')
@section('turnos')
<head>
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!--full calendar -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.css">


<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/locales-all.min.js"></script>
</head>


<!-- Formulario -->
<br>
<p class="text-dark text-center"> Elegí tu turno.Dentro de la opciones (venterinario o peluqueria canina). Recorda que te va llegar un aviso al celular con el turno seleccionado. 
</p>
<div class="contenido_turnos">

<div class="container-fluid d-flex justify-content-center ">
 <div class="container  calendario p-3 formulario_turno">
{{--    <form action="{{ route('turnos/agregar')}}" method="POST"> --}}
 {{--    <form action="{{ route('turnos.store')}}" method="POST"> --}}
  <form action="/turnos/agregar" method="POST"> 
    @csrf
    @method('post')
     <div class="form-group">
      <div class="row container-fluid d-flex justify-content-center">
          <div class="col-md-8">
          <label for="exampleFormControlInput1">Nombre </label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder=" " maxlength="20" required>
          <label for="exampleFormControlInput1"> Apellido</label>
          <input type="text" class="form-control" id="Apellido" name="apellido" placeholder=" " maxlength="20" required>
          <label for="exampleFormControlInput1">DNI</label>
          <input type="text" class="form-control" id="dni" name="dni" placeholder=" " maxlength="8" required>
          <div class="form-group ">
          <label for="exampleFormControlInput1">Celular</label>
          <input type="text" class="form-control" id="celular" name="celular" placeholder=" " maxlength="9" required>
          <label for="exampleFormControlSelect1">Turno</label>
          <select class="form-control" id="tipoTurno">
          <option>Seleccionar Turno</option>  
          <option value="v">Veterinaria</option>
          <option value="p">Peluqueria Canina</option>
          </select>
          <div id="textoTurno"></div>
          </div>
          </div>
    </div>
  
          <br>
          <div class="container-fluid d-flex justify-content-center"></div>
           <br>
          <div class="container" id="area" name="area">
          <div class="row">
          <div class="col-md-2"></div> 
          <div class="col-sm-12 col-md-8 bg-white"><div id="agenda">
          </div></div>
          <div class="col-md-2"></div>
          </div>
     
</div> 

      </div>
     <div class="modal fade" id="myModal" name="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
           <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header-center">
            <div id="tituloTipo"></div>
            <h5 class="modal-title text-center" id="staticBackdropLabel"><i class="fa-solid fa-dog"></i> Horarios</h5>
           {{--  <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
            <span aria-hidden="true">&times;</span>
            </button> --}}
            </div>
             <div class="modal-body" id="ventana">
             <div id="turnoHora"></div>
               </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
                  <button type="button" id="guardarModal" class="btn btn-dark" data-bs-dismiss="modal">Guardar Turno</button>
                </div>
               </div>
             </div>
           </div>
        
           <br>
            <button class="btn btn-dark btn-success mp-1"  type="reset">Cancelar</button>
            <button class="btn btn-dark btn-success mp-1" type="submit" >Aceptar</button>
                
            </div>
            <br>
            <br>
    
</form>  

 </div>
</div>
</div>


<script src="{{asset('agenda.js')}}" defer></script>

 


@endsection

