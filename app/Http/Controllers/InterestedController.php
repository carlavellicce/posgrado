<?php

namespace App\Http\Controllers;

use App\Interested;
use App\career;
use Illuminate\Http\Request;

class InterestedController extends Controller
{
    public function index()
    {
    	$interesteds = Interested::latest()->get(); 

    	return view('interesteds.index', [
    		'interesteds' => $interesteds
    	]);
    }

    public function create()
    {
        $careers = career::all();
        return view('interesteds.create', compact('careers'));
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'nombre' 	=> 'required',
    		'titulo' 	=> 'required',
    		'telefono'  => 'required',
    		'email'	    => ['required', 'email', 'unique:interesteds']
    	]);

    	Interested::create([
    		'nombre' => $request->nombre,
    		'dni' => $request->dni,
    		'titulo' => $request->titulo,
    		'telefono' => $request->telefono,
    		'email' => $request->email,

            'career_id' => $request->career_id
    	]);

    	return back();
    }

}
