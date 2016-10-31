<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Session;

class FrontController extends Controller
{
    public function index()
    {
    	return view('front.index');
    }

    public function contacto()
    {
    	return view('front.contacto');
    }

    public function mensaje(Request $request)
    {
        if($request->ajax())
        {
            $email = $request['email'];
            Mail::send('emails.mensajeContacto', ['mensaje' => $request['message']], function($message) use ($email)
            {
                $message->from($email, 'Macladas Ingenieros Consultores');
                $message->to('sistemamacladas@gmail.com')->cc('miguelcar18@gmail.com')->subject('Mensaje página Macladas');
            });
            $mensaje = '
                <div class="alert alert-dismissible alert-success">
                    <strong class="alert-link">Mensaje enviado</strong>.
                </div>
            ';
            return response()->json([
                'message' => "Mensaje enviado satisfactoriamente"
            ]);
        }
    }

    public function about()
    {
        return view('front.about');
    }

    public function geotecnia()
    {
        return view('front.geotecnia');
    }

    public function hidrogeologia()
    {
        return view('front.hidrogeologia');
    }

    public function metalmecanica()
    {
        return view('front.metalmecanica');
    }

    public function mineria()
    {
        return view('front.mineria');
    }

    public function resistividad()
    {
        return view('front.resistividad');
    }

    public function clients()
    {
        return view('front.clientes');
    }

    public function portfolio()
    {
        return view('front.portafolio');
    }
}
