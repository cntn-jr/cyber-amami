@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h5 class="text-center my-3">ツアー一覧</h5>
            <div class="list-group">
                @foreach($tours as $tour)
                    <a href="{{ route('show_tour', $tour->id) }}" class="list-group-item list-group-item-light p-3">
                         {{ $tour->title }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
