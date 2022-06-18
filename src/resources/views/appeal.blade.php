@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light mt-3">
                <div class="card-header">{{ __('奄美市の魅力') }}</div>

                <div class="card-body">
                    ”<span class="font-weight-bold" style="font-weight: bold;">
                        奄美大島は、鹿児島本土と沖縄本島のほぼ中間の洋上に位置しています。面積は沖縄本土の約８割ほど。日本の離島の中では佐渡島に次ぐ２番目の大きさです。特徴的なのは、島の多くの部分が森であるということ。山間の自然は多様性と希少性を併せ持ち、世界に誇る豊かさを持っています。日本で２番目に広いマングローブ林や、アマミノクロウサギに代表される絶滅が危惧される固有種。そうして豊かな森が育む海洋部には、美しいサンゴ礁が広がっています。
                    </span>”
                    <p class="mt-1">上記のように奄美は貴重な自然に囲まれており、とても素晴らしい島でございます。</p>
                    <blockquote class="mt-3">
                        <p><cite>出典：<a href="https://www.amami-tourism.org/about/" target="_brank">のんびり奄美</a></cite></p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection