<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Place;
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
            'title' => 'Добавить страну'
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

    public function editCountry(Request $request)
    {
        $countries = Country::select('id', 'name')->get();

            if ($request->has('button')){
                $country = new CountryController();
                $country->edit($request);

                return redirect('http://tourism.site/admin/edit/country');
            }

        return view('admin.editCountry', [
            'title' => 'редактор стран',
            'countries' => $countries,
        ]);
    }

    public function editCity(Request $request)
    {
        $cities = City::select('id', 'name')->get();

            if ($request->has('button')){
                $city = new CityController();
                $city->edit($request);

                return redirect('http://tourism.site/admin/edit/city');
            }

        return view('admin.editCity', [
            'title' => 'редактор городов',
            'cities' => $cities,
        ]);
    }

    public function editPlace(Request $request, $id = null)
    {
        $places = Place::all();
            if (isset($id)){
                $place = Place::find($id);
                     if ($request->has('button')){
                         $description = new PlaceController();
                         $description->edit($request, $id);

                         return redirect('http://tourism.site/admin/edit/place/' . $id);
                     }
            } else {
                $place = null;
            }

        return view('admin.editPlace', [
            'title' => 'редактор достопримечательностей',
            'places' => $places,
            'place' => $place,
        ]);
    }
}
