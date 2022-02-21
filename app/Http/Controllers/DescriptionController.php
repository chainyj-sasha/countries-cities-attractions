<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    public function show($id)
    {
        $description = Place::find($id);

        return view('description.show', [
            'title' => 'Описание',
            'description' => $description,
        ]);
    }
}
