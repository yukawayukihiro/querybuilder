<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lists;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ListsRequest;

class ListsController extends Controller
{
    public function index () {
        $user_lists = Lists::all();
        return view('index', compact('user_lists')); 
    }

    public function add (Request $request) {
        return view('add');
    }

    public function create (ListsRequest $request) {
        $param = [
            'name' => $request->name,
            'age' => $request->age,
            'mail' => $request->mail,
        ];
        DB::table('lists')->insert($param);
        return redirect('/hello');
    }

    public function edit ($id) {
        $lists = Lists::find($id);
        return view('edit', compact('lists'));
    }

    public function update (Request $request) {
        Lists::find($request->id)->update([
            'name' => $request->name,
            'age' => $request->age,
            'mail' => $request->mail,
        ]);
        return redirect('/hello');
    }

    public function delete ($id) {
        Lists::where('id', $id)->delete();
        return redirect('/hello');
    }
}
