<?php

namespace App\Http\Controllers;


use App\Models\Cars;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\fromRequestCar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Pagination\Paginator;

class CarsController extends Controller
{
    //
    public function index():View{

        // $cars = new Cars();

        // $cars->marque='Toyota';
        // $cars->modele='Fortuner';
        //  $cars->couleur='Noire';
        //  $cars->slug='Toyota-F-Noire-4';
        //  $cars->save();

    //   $cars= Cars::find(4);
    //   $cars->slug='Toyota-F-Noire';
    //   $cars->save();

    //     dd($cars);
    //     return  $cars;

    return view('cars.index',['cars'=>Cars::paginate(2)]);
    }

    public function show(string $slug, Cars $car ):RedirectResponse|View {



        if($car->slug!==$slug){

            return to_route('cars.show',['slug'=>$car->slug,'car'=>$car->id ]);
        }

        return view('cars.show',['carx'=> $car]);
    }

    public function create():view{
        $car = new Cars();
        return view('cars.create',['car'=>$car]);
    }
    public function edit(Cars $car):View{
        return view('cars.edit',['car'=>$car]);
    }
    public function  store(fromRequestCar $request){
        $car = Cars::create($request->validated());
        return redirect()->route('cars.show',['slug'=>$car->slug , 'car'=>$car->id])->with('success',"La voiture a été bien enregistré");
    }
    public function update(Cars $car,fromRequestCar $request ){
        $car->update($request->validated());
        return redirect()->route('cars.show',['slug'=>$car->slug , 'car'=>$car->id])->with('success',"les information sur  la voiture ont été bien modifié  ");
    }

}
