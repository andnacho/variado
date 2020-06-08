<?php

namespace App\Http\Controllers;

use App\Models\Threads;
use Illuminate\Http\Request;

class PruebasController extends Controller
{
    public function index(Request $request)
    {

        $name = Threads::all();

        $thread = new Threads();

        $thread->user_id = 15;
        $thread->channel_id = 15;
        $thread->body = 'muy bueno';
        $thread->title = $request->nombre;
        $thread->save();

        return view('bienvenida', compact('name'));

    }

    public function create()
    {
        return view('form');
    }

    public function charge(Request $request)
    {

        dd($request->all());
        $token = $request->get('stripeToken');

        dd($token);
        return ;
    }
}

