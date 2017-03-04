<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Router;

class PosterController extends Controller
{
    public function index(Request $request)
    {
    	$router = new Router;
    	$router->content = $request->get('content');
    	$router->save();
    	return $request->get('content');
    }
}
