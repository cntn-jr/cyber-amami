<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Tour;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function show(){
        $sum = 0;
        $book = Booking::all();
        foreach($book as $b){
            $tour = Tour::find($b->tour_id);
            $sum += $tour->price;
        }
        return view('admin.show')->with([
            'sum' => $sum,
        ]);
    }
}
