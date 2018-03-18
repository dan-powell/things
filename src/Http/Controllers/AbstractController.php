<?php

namespace DanPowell\Things\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;


//use App\Models\Book;

class AbstractController extends Controller
{

    private $model;

    public function __construct(Request $request)
    {
        $thing = \Route::current()->parameters['thing'];

        $class = config('things.models.' . $thing . '.class');

        $this->model = new $class;

    }

    public function index()
    {
        return $this->model::all();
    }

    public function show($thing, $id)
    {
        return $this->model::findOrFail($id);
    }

    public function store(Request $request)
    {
        $this->model->fill($request->all());
        $this->model->save();
    }

    public function update($thing, $id, Request $request)
    {
        $thing = $this->model::findOrFail($id);
        $thing->fill($request->all());
        $thing->save();
    }

    public function delete($thing, $id, Request $request)
    {
        $thing = $this->model::findOrFail($id);
        $thing->delete();
    }

}
