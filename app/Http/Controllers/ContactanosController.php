<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\contactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    //
    public function index(){
        return view('contactanos.index');
    }

    public function store(Request $request){

        $correo = new contactanosMailable($request->all());
        
        Mail::to('emerbachiller2@mail.com')->send($correo);
        return 'mensaje enviado';

    }

}
