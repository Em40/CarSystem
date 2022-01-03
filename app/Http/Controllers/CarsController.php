<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars_list', compact('cars'));
    }
    public function add()
    {
        return view('add_car');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'production_year' => 'required',
            'travelled_kilometers' => 'required',
            'car_models_id' => 'required',
            'manufacturer_id' => 'required'
        ]);

        $car = new Car();
        $car->name = $request->name;
        $car->production_year = $request->production_year;
        $car->travelled_kilometers = $request->travelled_kilometers;
        $car->car_models_id = $request->car_models_id;
        $car->manufacturer_id = $request->manufacturer_id;
        $car->save();
        return redirect('/cars_list');
    }

    public function edit(Car $car)
    {
        return view('edit_car', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        if(isset($_POST['delete'])) {
            $car->delete();
            return redirect('/cars_list');
        }
        else
        {
            $this->validate($request, [
                'name' => 'required',
                'production_year' => 'required',
                'travelled_kilometers' => 'required',
                'car_models_id' => 'required',
                'manufacturer_id' => 'required'
            ]);
            $car->name = $request->name;
            $car->production_year = $request->production_year;
            $car->travelled_kilometers = $request->travelled_kilometers;
            $car->car_models_id = $request->car_models_id;
            $car->manufacturer_id = $request->manufacturer_id;
            $car->save();
            return redirect('/cars_list');
        }
    }
}
