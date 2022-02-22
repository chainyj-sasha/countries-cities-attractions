<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function show($city)
    {
        $city = City::where('name', $city)->select('id')->get();
        $id = $city[0]->id;

        $places = Place::where('city_id', $id)->select('id', 'title', 'text')->get();

        return view('place.show', [
            'title' => 'Список достопримечательностей',
            'places' => $places,
        ]);
    }

    public function insert(Request $request)
    {
        $place = new Place();
        $place->title = $request->title;
        $place->text = $request->text;
        $place->city_id = $request->cityId;
        $place->save();
    }

    public function edit(Request $request, $id)
    {
        $place = Place::find($id);
        $place->title = $request->newTitle;
        $place->text = $request->newText;
        $place->save();
    }

    public function delete($id)
    {
        $place = Place::find($id);
        $place->delete();

        return redirect('http://tourism.site/admin/edit/place/');
    }
}
