let myModal = new bootstrap.Modal(document.getElementById('myModal'));
  
let botonAnda = document.getElementById('tipoTurno');
  
  
  
botonAnda.addEventListener('change', ()=> {
let turnos=[];
  
let tipoTurno =document.getElementById('tipoTurno').value; 

$.ajax({
        type:"POST",
        url:"/turnos/mostrarTurno", 
        data:{
              id:tipoTurno,
              _token:$('input[name="_token"]').val()
             }
}).done(function(res){

   let arregloDatos=JSON.parse(res);

   let longitud= arregloDatos.length; 

  for(let x=0;x<longitud;x++){
      turnos[x]={ "id":arregloDatos[x].id,
                "title":arregloDatos[x].title, 
                 "start":arregloDatos[x].start,
                 "navLinks":false,
                 "editable":false,  
                 height: 100,
                 width: 400 , 
                 color: 'purple',
               /*   backgroundColor: '#ffffff',
                 textColor:'#000000' */
           
                 
                }
   /*      console.log(turnos[x].start+" tipo start " + typeof(turnos[x].start));
        console.log(turnos[x].end+" tipo end " + typeof(turnos[x].end));     */ 
        }
        
        let calendarEl = document.getElementById('agenda');
        calendarEl.style.display='block';
        let calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'timeGridWeek',
          locale:"es",

          
          
          headerToolbar:{
            left: 'prev,next', // izquieda anterior y siguiente
            center: 'title',  //titulo en el centro
           /*  right: 'today,dayGridMonth,timeGridWeek',  */
            right: 'timeGridWeek', //derecha hoy , mes, semana
          },
          eventClick: function(info) {
          /*   alert('Event: ' + info.event.title);
            alert('fecha: ' + info.event.startStr);
            alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
            alert('View: ' + info.view.type);
        
            // change the border color just for fun */
            info.el.style.borderColor = 'red';

            let tituloTipo = document.getElementById('tituloTipo');
            let tipoHora = document.getElementById('turnoHora'); 
       /*      tituloFecha.innerHTML= "("+info.event.id+")"+info.event.title +" "+ info.event.start.getHours()+":"+info.event.start.getMinutes(); */ 
      
            tipoHora.innerHTML=`<input type="radio" id="${info.event.id}" name="horario" class="mp-2" value='${info.event.start.getHours()+":"+info.event.start.getMinutes()}'> ${info.event.start.getHours()+":"+info.event.start.getMinutes()+info.event.start.getSeconds()}`;
            tituloTipo.innerHTML=`${info.event.title}`; 
              //modal, guarda la turno y mostrar en el formulario 
              let guardarModal = document.getElementById('guardarModal');
              //se enconde el calendario le cambiamos el comportamiento 
              guardarModal.addEventListener('click', ()=>{
                calendarEl.style.display='none';
                textoTurno.innerHTML = `<label for="exampleFormControlInput1">Horario Seleccionado</label><input type="text" class="form-control " name="horarioSeleccion" value='${info.event.start.getHours()+":"+info.event.start.getMinutes()+info.event.start.getSeconds()} 'input readonly onmousedown="return false;" /></div> 
                <input type="hidden" name="horario" value='${info.event.id}' />
                `; 
                 
                 }); 
                /*  let fechaSeleccion= document.getElementById('textoTurno');
                 fechaSeleccion.innerHTML= `${info.event.start.getHours()+":"+info.event.start.getMinutes()+info.event.start.getSeconds()} `; */ 
            myModal.show(); 
          },
         /* eventClick:function (info) {
          // la función de fullCalendar dateStr de la fecha
           let fechaCallendar = info.dateStr; //cuando clickea la persona 
            let longitud = turnos.length; 
            /*  console.log(longitud);  */
            /*let cadena = turnos[0].start;*/
           /* cadena = cadena.substring(0,10); */
           /* let AuxHora =[]; 
            for(let i=0, x=0;i<longitud;i++,x++){
             
              if(fechaCallendar == (turnos[i].start.substring(0,10))){
               AuxHora[x]=turnos[i]; 
              
              }
          
                          
            }
            //imprime el arreglo con los horarios 
            var textoHorario= document.getElementById('datosDisponible'); 
   
            const HoraTemplate = AuxHora.map(elemento=>`<input type="radio" id="${elemento.id}" name="horario" class="mp-2" value='${elemento.start.substring(11,21)}'> ${elemento.start.substring(11,21)}`);
            console.log(HoraTemplate);
            textoHorario.innerHTML = HoraTemplate.join('');
            //
           //insertamos los horarios en un arreglo 
            let horario = []; 
            horario=document.getElementsByName('horario');
           //dicho arreglemos vamos a saber el valor que toma cuando 
           //hace click la personas y también sabemos su valor 
            let texto,largo,id; 
            let textoTurno = document.getElementById('textoTurno');
            largo = horario.length; 
            for(let i=0;i<largo;i++){

              horario[i].addEventListener('click', ()=>{
            
                texto=horario[i].value;
                id=horario[i].id; 
                }); 
            } 
            
            //modal, guarda la turno y mostrar en el formulario 
            let guardarModal = document.getElementById('guardarModal');
            //se enconde el calendario le cambiamos el comportamiento 
            guardarModal.addEventListener('click', ()=>{
              calendarEl.style.display='none';
              textoTurno.innerHTML = `<label for="exampleFormControlInput1">Horario Seleccionado</label><input type="text" class="form-control " name="horarioSeleccion" value='${texto}'input readonly onmousedown="return false;" /></div> 
              <input type="hidden" name="horario" value='${id}' />
              `; 
               
               }); 
               
            let tituloFecha = document.getElementById('tituloFecha');
            tituloFecha.innerHTML=info.title; 

            
       
             myModal.show(); 
        
        
          },*/
        
      /*     eventClick:function() {
           
           
         
      },  */
     
      events:turnos

     
    
          })
    
        calendar.render();
        
    
      
    
    
    
    
    
      });
       
  })





  