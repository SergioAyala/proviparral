<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ApiUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return response()->json($usuarios,200);
    }
}