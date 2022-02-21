<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function show($country)
    {
        $country = Country::where('name', $country)->select('id')->get(); // Этот запрос приходится делать исключительно из-за ЧПУ URL,
        $id = $country[0]->id;                                                           // просто не додумал, как передать id страны по другому

        $cities = City::where('country_id', $id)->select('id', 'name', 'country_id')->get();

        return view('city.show', [
            'title' => 'Список городов',
            'cities' => $cities,
        ]);
    }

    public function insert(Request $request)
    {
        $city = new City();
        $city->name = $request->cityName;
        $city->country_id = $request->countryId;
        $city->save();
    }
}
