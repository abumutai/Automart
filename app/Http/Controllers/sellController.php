<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caronsells;
use App\Models\Payment;
use App\Models\car_make;
use App\Models\car_model;
use App\Models\CarMake;
use App\Models\CarModel;

class sellController extends Controller
{
    public function index()
    {
        $make = CarMake::all();
        return view('sell', compact('make'));
    }
    // public function dealer()
    // {
    //     $make= car_make::all();
    //     return view('make'));
    // }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'country'  => 'required',
            'county' => 'required',
            'make' => 'required',
            'model' => 'required',
            'year' => 'required',
            'price' => 'required',
            'miles' => 'required',
            'vin' => 'required',
            'exterior' => 'required',
            'interior' => 'required',
            'fuel_type' => 'required',
            // 'features' => 'required',
            'transmission' => 'required',
            'vehicle_type' => 'required',
            'description' => 'required',
            'images' => 'required|max:10|min:1',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        if (count($request->images) > 10) {
            return redirect()->back()->with('errorMsg', 'Images must not be more than 10');
        }
        $vehicles = Caronsells::where('vin', $request->vin)->first();
        if ($vehicles == true) {
            return redirect(route('sellcar'))->with('errorMsg', 'Vehicle Already Listed.');
        }

        if ($request->hasfile('images')) {

            foreach ($request->file('images') as $image) {
                $name = $image->getClientOriginalName();
                $image->move(public_path() . '/images/', $name);
                $data[] = $name;
            }
        }
        $prefix = "GWAAK";
        $carID = $prefix . rand();

        $carOnSell = new Caronsells;
        $carOnSell->title = $request->title;
        $carOnSell->country = $request->country;
        $carOnSell->county = $request->county;
        $carOnSell->make = $request->make;
        $carOnSell->model = $request->model;
        $carOnSell->year = $request->year;
        $carOnSell->price = $request->price;
        $carOnSell->miles = $request->miles;
        $carOnSell->vin = $request->vin;
        $carOnSell->exterior = $request->exterior;
        $carOnSell->interior = $request->interior;
        $carOnSell->fuel_type = $request->fuel_type;
        // $carOnSell->feartures = json_encode($featdata);
        $carOnSell['features'] = json_encode($request->input('features'));
        $carOnSell->transmission = $request->transmission;
        $carOnSell->vehicle_type = $request->vehicle_type;
        $carOnSell->description = $request->description;
        $carOnSell->images = json_encode($data);
        $carOnSell->firstname = $request->firstname;
        $carOnSell->lastname = $request->lastname;
        $carOnSell->email = $request->email;
        $carOnSell->phone = $request->phone;
        $carOnSell->carId = $carID;
        $carOnSell->save();
        $message = 'Vehicle uploaded successfully';
        return redirect(route('payment'))->with(['successMsg' => $message, 'carID' => $carID]);
    }
    public function pay()
    {
        $packs =  $packs = Payment::all();
        return view('payments', compact('packs'));
    }
    public function getmodel($id)
    {
        $model = CarModel::where('car_make_id', $id)->pluck("car_model_name", "id");
        return json_encode($model);
    }
}
