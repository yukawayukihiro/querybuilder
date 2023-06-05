<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lists;
use Illuminate\Support\Facades\DB;

class ListsController extends Controller
{
    public function index () {
        $user_lists = Lists::all();
        return view('index', compact('user_lists')); 
    }
}
