@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light mt-3">
                <div class="card-header">{{ __('奄美市の歴史') }}</div>

                <div class="card-body">
                    <p>
                        奄美市は、九州と沖縄の中間に位置する奄美群島の中心都市である。　奄美群島は、琉球文化の影響を受けつつ、独自の文化圏を作っている。　歴史的には、江戸時代に薩摩藩の領地となり搾取されるという厳しい時代を長く送っていた。　第二次世界大戦後の戦後処理では１９４６年から１９５３年までの間、一時期アメリカ領となった。
                    </p>
                    <p>
                        気候的には、亜熱帯気候に属し温暖である。　また、位置的に台風の影響も受けやすく、毎年農作物に被害を受けている。
                    </p>
                    <p>
                        奄美市は、平成18年に市町村合併で名瀬市、住用村、笠利町が合併して誕生した。旧名瀬市の人口は平成12年の43,015人から平成21年2月には39,903人へと約3,000人の減少となっている。
                        人口の減少と高齢化、そして産業の衰退と、島国である日本の縮図が奄美市には現れている。　食糧自給についても、レタスなどの野菜や卵、牛乳などは船で鹿児島から運んでいるために低く、ひとたび台風が接近すると生鮮食料品は地元のスーパーから姿を消してしまう。　資源が少ないことも本土と似ており、島外への輸出できるものは、まだ少ない。　産業の中心は観光であるが、本土からは沖縄に観光客が流れているため、数が増えていないのが現状である。
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
