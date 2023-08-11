<?php

namespace App\Http\Controllers;


use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\View\View;

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

    //    $cars= Cars::paginate(1);

    //     dd($cars);
    //     return  $cars;

    return view('cars.index');
    }
    public function show(string $slug, Cars $cars ):RedirectResponse|View {
        return view();
    }
}
