<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function show()
    {
        $countries = Country::select('id', 'name')->get();

        return view('country.show', [
            'title' => 'Список стран',
            'countries' => $countries,
        ]);
    }

    public function insert(Request $request)
    {
        $country = new Country;
        $country->name = $request->countryName;
        $country->save();
    }

    public function edit(Request $request)
    {
        $country = Country::find($request->countryId);
        $country->name = $request->newName;
        $country->save();
    }
}
