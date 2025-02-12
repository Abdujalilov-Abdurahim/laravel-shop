<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class ShopController extends Controller
{
    
    public function index()
    {

        $ManUnd = Team::where("name", "Manchester United")->first()->products()->get();
        $ManCity = Team::where("name", "Manchester City")->first()->products()->get();
        $Liverpool = Team::where("name", "Liverpool")->first()->products()->get();

        return view("main")->with([
            "ManUnds"=> $ManUnd,
            "ManCitys"=> $ManCity,
            "Liverpools"=> $Liverpool
        ]);
    }

    public function contact()
    {
        return view("contact");
    }

    public function about()
    {
        return view("about");
    }

    public function ManUnd()
    {
        $team = Team::where("name", "Manchester United")->first();
        if ($team) {
        $products =$team->products()->paginate(6);
            return view("ManUnd")->with("products", $products);
        }
    }

    public function ManCity()
    {
        $team = Team::where("name", "Manchester City")->first();
        if ($team) {
            $products =$team->products()->paginate(6);
            return view("ManCity")->with("products", $products);
        }
    }

    public  function Liverpool()
    {
        $team = Team::where("name", "Liverpool")->first();
        if ($team) {
            $products =$team->products()->paginate(6);
            return view("Liverpool")->with("products", $products);
        }
    }
    

}
