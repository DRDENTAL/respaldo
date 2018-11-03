<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use Storage;


class emailController extends Controller
{
    public function crear()
    {
        return view("webpage.contacto");
    }

    public function enviaremail()
    {
        $data = array();
        $user = "";
        $nombre = $_POST['nombre'];
        
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];
        

        // Datos del email
        $para = $email;
        $titulo = 'Autoenergy Contacto';
        $header = 'From: ' . $email;
        $msjCorreo = "Nombre: $nombre\n Telefono: $telefono\n E-Mail: $email\n Mensaje:\n $mensaje";

        
            
            Mail::send('correo.plantilla_correo', $data, function ($message) use ($email) {
                $message->subject('Contacto');
                $message->to('javierelguetainacapino@gmail.com');
                    
            });
        
    }



 public function enviar(Request $request)
        {
        
       

        
        $email=$request->input("email");
        $nombre=$request->input("nombre");
        $mensaje=$request->input("mensaje");

       
        $data = array('mensaje' => $mensaje);
        $r= Mail::send('correo.plantilla_correo', $data, function ($message) use ($email,$nombre) {
            
            
            $message->from('javierelguetainacapino@gmail.com', 'Contacto');
            $message->to($email)->subject($nombre);
           

        });
            
        if($r){   
                
                return view("mensajes.msj_correcto")->with("msj","Correo Enviado correctamente");   
        }
        else
        {            
             return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
        }

       
        }








/*
    public function enviar(Request $request)
        {
        
        $pathToFile="";
        $containfile=false; 
        if($request->hasFile('file') ){
           $containfile=true; 
           $file = $request->file('file');
           $nombre=$file->getClientOriginalName();
           $pathToFile= storage_path('app') ."/". $nombre;
        }

        
        $destinatario=$request->input("destinatario");
        $asunto=$request->input("asunto");
        $contenido=$request->input("contenido_mail");

       
        $data = array('contenido' => $contenido);
        $r= Mail::send('correo.plantilla_correo', $data, function ($message) use ($asunto,$destinatario,  $containfile,$pathToFile) {
            
            
            $message->from('javierelguetainacapino@gmail.com', 'Contacto');
            $message->to($destinatario)->subject($asunto);
           if($containfile){
            $message->attach($pathToFile);
            }

        });
            
        if($r){   
                 if($containfile){ Storage::disk('local')->delete($nombre); }        
                return view("mensajes.msj_correcto")->with("msj","Correo Enviado correctamente");   
        }
        else
        {            
             return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
        }

       
        }*/

    public function index()
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
   {
        if($request->hasFile('file') ){ 

        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $nombre=$file->getClientOriginalName();
        
        $r= Storage::disk('local')->put($nombre,  \File::get($file));
       

         } 
         else{

            return "no";
         } 

        if($r){
            return $nombre ;
        }
        else
        {
            return "error vuelva a intentarlo";
        }
      
         
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
