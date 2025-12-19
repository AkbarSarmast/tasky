<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class TaskController extends Controller
{
    public function index() { return Task::all(); }

    public function store(Request $r) { 
        return Task::create($r->all()); 
    }

    public function show($id) { return Task::find($id); }

    public function update(Request $r, $id) { 
        $t=Task::find($id); 
        $t->update($r->all()); 
        return $t;
    }

    public function destroy($id) { 
        return Task::destroy($id); 
    }
}
