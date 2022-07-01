<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turno;
use Illuminate\Support\Facades\DB;

class TurnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*  $turnosVeterinaria= DB::table('turnos')
                ->where('estado',1)
                ->where('tipo','v')
                ->get();
        $turnosPeluqueria= DB::table('turnos')
                ->where('estado',1)
                ->where('tipo','p')
                ->get();
                $turnosVeterinaria = json_encode($turnosVeterinaria);
                $turnosPeluqueria = json_encode($turnosPeluqueria); */
                return view('turnos');
       /*  return view ('turnos')->with('turnosVeterinaria',$turnosVeterinaria)->with('turnosPeluqueria',$turnosPeluqueria);  */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request 
     * @param string $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(Request  $request)
    {
      /*  $turno = DB::table('turnos')
                ->where('tipo',$request->id)
                ->get();
     
 return response(json_encode($turno),200)->header('content-type','text/plain');
                
                

 */
    }

        /**
     * Store a newly 
     *
     * @param  \Illuminate\Http\Request  $request 
     * @return \Illuminate\Http\Response
     */
    public function mostrarTurno(Request  $request)
    {
       $turno = DB::table('turnos')
                ->where('tipo',$request->id)
                ->get();
     
 return response(json_encode($turno),200)->header('Content-type','text/plain');
                
                


    }

    

    /**
     * Display the specified resource.
     *
     * @param   \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function  store()
    {    
        



    /*     $nueva = $request->get('fecha'); //sacame del formulario html input fecha 
        //guardalo en nuevs 
        //dd($nueva);
        //echo $nueva;
        
        $listadoHorario = DB::table('turnos')->where('fecha',$nueva)->get();
        return view('horarios',compact('listadoHorario')); */
    }

    /**
     * Show the form for editing the specified resource.

   

    
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
