@extends('setting.main')

@section('plan')
    <h2>週間学習計画</h2>
    
@if(isset($plans))
<!--    <div class="row">-->
<!--        <div class="col-sm-5">-->
<!--            <div class="row">-->
<!--                <h4 class="col-5 text-center">月</h4>-->
<!--                <div class="col-2 text-center"><strong>{{ $plans->mon_t }}</strong></div>-->
<!--                <h5 class="col-2 text-center">分</h5>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-sm-7">{{ $plans->mon_c }}</div>-->
<!--</div>-->
<!--    <div class="row">-->
<!--    <div class="col-sm-5">-->
<!--        <div class="row">-->
<!--            <h4 class="col-5 text-center">火</h4>-->
<!--            <div class="col-2"><strong>{{ $plans->tue_t }}</strong></div>-->
<!--            <h5 class="col-2 text-center">分</h5>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-sm-7">{{ $plans->tue_c }}</div>-->
<!--</div>-->
<!--    <div class="row">-->
<!--    <div class="col-sm-5">-->
<!--        <div class="row">-->
<!--            <h4 class="col-5 text-center">水</h4>-->
<!--            <div class="col-2"><strong>{{ $plans->wed_t }}</strong></div>-->
<!--            <h5 class="col-2 text-center">分</h5>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-sm-7">{{ $plans->wed_c }}</div>-->
<!--</div>-->
<!--    <div class="row">-->
<!--    <div class="col-sm-5">-->
<!--        <div class="row">-->
<!--            <h4 class="col-5 text-center">木</h4>-->
<!--            <div class="col-2"><strong>{{ $plans->thu_t }}</strong></div>-->
<!--            <h5 class="col-2 text-center">分</h5>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-sm-7">{{ $plans->thu_c }}</div>-->
<!--</div>-->
<!--    <div class="row">-->
<!--    <div class="col-sm-5">-->
<!--        <div class="row">-->
<!--            <h4 class="col-5 text-center">金</h4>-->
<!--            <div class="col-2"><strong>{{ $plans->fri_t }}</strong></div>-->
<!--            <h5 class="col-2 text-center">分</h5>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-sm-7">{{ $plans->fri_c }}</div>-->
<!--</div>-->
<!--    <div class="row">-->
<!--    <div class="col-sm-5">-->
<!--        <div class="row">-->
<!--            <h4 class="col-5 text-center">土</h4>-->
<!--            <div class="col-2"><strong>{{ $plans->sat_t }}</strong></div>-->
<!--            <h5 class="col-2 text-center">分</h5>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-sm-7">{{ $plans->sat_c }}</div>-->
<!--</div>-->
<!--    <div class="row">-->
<!--    <div class="col-sm-5">-->
<!--        <div class="row">-->
<!--            <h4 class="col-5 text-center">日</h4>-->
<!--            <div class="col-2"><strong>{{ $plans->sun_t }}</strong></div>-->
<!--            <h5 class="col-2 text-center">分</h5>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-sm-7">{{ $plans->sun_c }}</div>-->
<!--</div>-->
<table class="table table-bordered">
    <tbody>
        <tr class="text-center">
            <th><h4 class="col-1 mt-2 ml-4">月</h4></th>
            <td><div class="col-12 mt-2"><strong>{{ $plans->mon_t }}</strong>&emsp;分</div></td>
            <td><div class="col-12 mt-2">{{ $plans->mon_c }}</div></td>
        </tr>
        <tr class="text-center">
            <th><h4 class="col-1 mt-2 ml-4">火</h4></th>
            <td><div class="col-12 mt-2"><strong>{{ $plans->tue_t }}</strong>&emsp;分</div></td>
            <td><div class="col-12 mt-2">{{ $plans->tue_c }}</div></td>
        </tr>
        <tr class="text-center">
            <th><h4 class="col-1 mt-2 ml-4">水</h4></th>
            <td><div class="col-12 mt-2"><strong>{{ $plans->wed_t }}</strong>&emsp;分</div></td>
            <td><div class="col-12 mt-2">{{ $plans->wed_c }}</div></td>
        </tr>
        <tr class="text-center">
            <th><h4 class="col-1 mt-2 ml-4">木</h4></th>
            <td><div class="col-12 mt-2"><strong>{{ $plans->thu_t }}</strong>&emsp;分</div></td>
            <td><div class="col-12 mt-2">{{ $plans->thu_c }}</div></td>
        </tr>
        <tr class="text-center">
            <th><h4 class="col-1 mt-2 ml-4">金</h4></th>
            <td><div class="col-12 mt-2"><strong>{{ $plans->fri_t }}</strong>&emsp;分</div></td>
            <td><div class="col-12 mt-2">{{ $plans->fri_c }}</div></td>
        </tr>
        <tr class="text-center">
            <th><h4 class="col-1 mt-2 ml-4">土</h4></th>
            <td><div class="col-12 mt-2"><strong>{{ $plans->sat_t }}</strong>&emsp;分</div></td>
            <td><div class="col-12 mt-2">{{ $plans->sat_c }}</div></td>
        </tr>
        <tr class="text-center">
            <th><h4 class="col-1 mt-2 ml-4">日</h4></th>
            <td><div class="col-12 mt-2"><strong>{{ $plans->sun_t }}</strong>&emsp;分</div></td>
            <td><div class="col-12 mt-2">{{ $plans->sun_c }}</div></td>
        </tr>
    </tbody>
</table>
    <p>{!! link_to_route('plan.edit','編集',['id'=>$plans->id],['class'=>'btn btn-block btn-outline-light mt-5']) !!}</p>
@else
    <p>{!! link_to_route('plan.create','設定',[],['class'=>'btn btn-block btn-outline-light mt-5']) !!}</p>
@endif

@endsection