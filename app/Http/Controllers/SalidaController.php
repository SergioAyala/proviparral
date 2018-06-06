<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Estudiante;
use App\Curso;
use App\Ensenanza;
use App\Permiso;
use App\Comida;
use App\Salida;
use App\Ingreso;

use DB;


class SalidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){

        $this->middleware('auth');
    }


    public function index()
    {
      // $products = Product::all();
        //return view('product')->with('products',$products);

         //   $products = Product::select('products.id','products.name as product','price','marks.name as mark')->join('marks','marks.id','=','products.marks_id')->get();
           //  return view('products.index',compact('products'))
        $estudiante = Estudiante::all();
        $curso = Curso::all();
        $ensenanza = Ensenanza::all();
        $permiso = Permiso::all();                
        $salidas = Salida::orderBy('id','DESC')->paginate(20);
        return view('salidas.index',compact('salidas','ensenanza','permiso','estudiante','curso'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

                    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estudiante = Estudiante::all();
         return view('salidas.create',compact('estudiante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
    request()->validate([    
    'estudiantes_id' => 'required',
    'motivo' => 'required',
    'hora_salida' => 'required|max:5',
    'persona_responsable' => 'required|max:200',
    'telefono' => 'required|max:11',



       ]);

      Salida::create($request->all());  
        return redirect()->route('salidas.index')
                        ->with('success','Alumno fue ingresado para retirar del establecimiento correctamente.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $curso = Curso::all();
        $ensenanza = Ensenanza::all();
        $permisos_entrada = Permiso::all();
        $estudiante = Estudiante::findOrFail($id);
        $ingreso = Ingreso::findOrFail($id);
        $salida = Salida::all();
        return view('salidas.show',compact('salida','curso','ensenanza','estudiante'));
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salida = Salida::findOrFail($id);
        return view('salidas.edit',compact('salida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
     {
        request()->validate([
            'name' => 'required',
            'price' => 'required',
            
        ]);
        Comida::findOrFail($id)->update($request->all());
        return redirect()->route('comidas.index')
                        ->with('success','Producto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           Comida::findOrFail($id)->delete();
        return redirect()->route('comidas.index')
                        ->with('success','Producto eliminado correctamente');
    }


}

