@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card bg-light my-3">
                <div class="card-header">{{ __('予約完了') }}</div>

                <div class="card-body">
                    「{{ $tour->title }}」の予約を完了しました。
                </div>
            </div>
            <a class="btn btn-secondary" role="button" href="{{ route('show_tours') }}">ホームへ</a>
        </div>
    </div>
</div>
@endsection
