@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('売上金額の合計') }}</div>

                <div class="card-body">
                    {{ $sum }}円
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
