@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h5 class="text-center my-3">ツアー詳細</h5>
            <div class="card bg-light my-3">
                <div class="card-header">{{ $tour->title }}</div>

                <div class="card-body">
                    <p>料金：{{ $tour->price }}</p>
                    <p>詳細:{{ $tour->detail }}</p>
                </div>
            </div>
            @if($booking)
                <form action="{{ route('delete_booking', $booking->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-warning">予約を取り消す</button>
                </form>
            @else
                <form action="{{ route('store_booking', $tour->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">予約する</button>
                </form>
            @endif
        </div>
    </div>
</div>
@endsection
