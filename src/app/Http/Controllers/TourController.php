<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TourController extends Controller
{
    public function create(){
        return view('create_tour');
    }

    public function show_tours(){
        $tours = Tour::all();
        return view('show_tours')->with(['tours' => $tours]);
    }

    public function show_tour($tour_id){
        $tour = Tour::find($tour_id);
        $is_booking = Booking::where('tour_id', $tour_id)->where('user_id', Auth::user()->id)->first();
        return view('show_tour')->with(['tour' => $tour, 'booking' => $is_booking]);

    }

    public function store_booking($tour_id){
        Booking::create([
            'user_id' => Auth::user()->id,
            'tour_id' => $tour_id
        ]);
        return redirect()->route('result_booking', $tour_id);
    }

    public function result_booking($tour_id){
        $tour = Tour::find($tour_id);
        return view('result_booking')->with('tour', $tour);
    }

    public function delete_booking($book_id){
        $booking = Booking::find($book_id);
        $tour_id = $booking->tour_id;
        $booking->delete();
        return redirect()->route('result_delete', $tour_id);
    }

    public function result_delete($tour_id){
        $tour = Tour::find($tour_id);
        return view('result_delete')->with('tour', $tour);
    }
}
