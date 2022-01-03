<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;

class CarModelsController extends Controller
{
    public function index()
    {
        $carModels = CarModel::all();
        return view('car_models_list', compact('carModels'));
    }
    public function add()
    {
        return view('add_car_model');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'manufacturer_id' => 'required'
        ]);
        $carModel = new CarModel();
        $carModel->name = $request->name;
        $carModel->manufacturer_id = $request->manufacturer_id;
        $carModel->save();
        return redirect('/car_models_list');
    }

    public function edit(CarModel $carModel)
    {
        return view('edit_car_model', compact('carModel'));
    }

    public function update(Request $request, CarModel $carModel)
    {
        if(isset($_POST['delete'])) {
            $carModel->delete();
            return redirect('/car_models_list');
        }
        else
        {
            $this->validate($request, [
                'name' => 'required',
                'manufacturer_id' => 'required'
            ]);
            $carModel->name = $request->name;
            $carModel->manufacturer_id = $request->manufacturer_id;
            $carModel->save();
            return redirect('/car_models_list');
        }
    }
}
