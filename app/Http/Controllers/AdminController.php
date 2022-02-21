<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show()
    {
        return view('admin.show', [
            'title' => 'Страница администратора'
        ]);
    }

    public function insertCountry(Request $request)
    {
        if ($request->has('button')){
            $countries = new CountryController();
            $countries->insert($request);

            return redirect('http://tourism.site/admin/insert');
        }
        return view('admin.insertCountry', [
            'title' => 'Страница администратора'
        ]);
    }

    public function insertCity(Request $request)
    {
        $countries = Country::select('id', 'name')->get();

           if ($request->has('button')){
               $city = new CityController();
               $city->insert($request);

               return redirect('http://tourism.site/admin/insert/city');
           }

        return view('admin.insertCity', [
            'title' => 'Добавить город',
            'countries' => $countries,
        ]);
    }

    public function insertPlace(Request $request)
    {
        $cities = City::select('id', 'name')->get();

            if ($request->has('button')){
                $place = new PlaceController();
                $place->insert($request);

                return redirect('http://tourism.site/admin/insert/place');
            }

        return view('admin.insertPlace', [
            'title' => 'Добавить достопримечательность',
            'cities' => $cities,
        ]);
    }
}
