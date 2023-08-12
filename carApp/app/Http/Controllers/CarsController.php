<?php

namespace App\Http\Controllers;


use App\Models\Cars;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
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
}
