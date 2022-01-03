<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;

class ManufacturersController extends Controller
{
    public function index()
    {
        $manufacturers = Manufacturer::all();
        return view('dashboard', compact('manufacturers'));
    }
    public function add()
    {
        return view('add_manufacturer');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'founded_on' => 'required'
        ]);
        $manufacturer = new Manufacturer();
        $manufacturer->name = $request->name;
        $manufacturer->founded_on = $request->founded_on;
        $manufacturer->save();
        return redirect('/dashboard');
    }

    public function edit(Manufacturer $manufacturer)
    {
        return view('edit_manufacturer', compact('manufacturer'));
    }

    public function update(Request $request, Manufacturer $manufacturer)
    {
        if(isset($_POST['delete'])) {
            $manufacturer->delete();
            return redirect('/dashboard');
        }
        else
        {
            $this->validate($request, [
                'name' => 'required',
                'founded_on' => 'required'
            ]);
            $manufacturer->name = $request->name;
            $manufacturer->founded_on = $request->founded_on;
            $manufacturer->save();
            return redirect('/dashboard');
        }
    }
}
