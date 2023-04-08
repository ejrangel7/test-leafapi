<?php
namespace App\controllers;

use App\Models\Person;

class PersonController extends Controller {

    public function index() {
        $data = Person::all();
        response()->json($data);
    }

    public function findById($id) {
        $data = Person::find($id);
        response()->json($data);
    }

    public function add() {
        $person = new Person;
        $person->name = app()->request()->get('name');
        $person->save();
        response()->json($person);
    }

    public function edit($id) {
        $person = Person::find($id);
        if($person) {
            $person->name = app()->request()->get('name');
            $person->update();
        }        
        response()->json($person);
    }

    public function delete($id) {
        $person = Person::find($id);
        Person::destroy($id);
        response()->json($person);
    }
}