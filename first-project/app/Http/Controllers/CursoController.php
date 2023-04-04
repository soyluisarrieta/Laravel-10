<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
  public function index()
  {
    return "Soy el index";
  }

  public function create()
  {
    return "Soy el create";
  }

  public function show($curso)
  {
    return "Soy el show con el parámetro: $curso";
  }
}
