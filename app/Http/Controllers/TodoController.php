<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use App\Models\Todo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class TodoController extends Controller
{
    public function index()
    {
        return Todo::all();
    }

    public function get(Todo $todo)
    {
        return $todo->toArray();
    }

    public function store(Request $request)
    {
        $model = new Todo($request->all());

        $model->save();

        return $model;
    }

    public function update(Todo $todo, Request $request)
    {
        $todo->update($request->all());

        return $todo;
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
    }
}
