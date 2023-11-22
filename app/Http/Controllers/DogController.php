<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;

class DogController extends Controller
{
    //page 32
    public function create(Request $request)
        {
        $this->validate($request, [
        'name' => 'required',
        ]);
        Dog::create($request->all());
        return to_route('index');
        }
        

        //page 50
        public function delete($id)
        {
        $dog = Dog::find($id);
        $dog->delete();
        return to_route('index');
        }
}
