<div class="row">
    
    <div class="col-sm-5 text-center mt-4">
        @if(isset($profiles->image_url))
            <p><img src="/storage/profile_images/{{ Auth::id() }}.jpg"; height="200px"; width="200px";></p>
        @else
            <p>アイコンが登録されていません。</p>
        @endif
        
        @if(isset($profiles->name))
            <p>{{ $profiles->name }}</p>
        @else
            <p>名前が登録されていません。</p>
        @endif
        
        @if(isset($profiles->content))
            <p>{{ $profiles->content }}</p>
        @else
            <p>自己紹介が登録されていません。</p>
        @endif   
    </div>
    
    <div class="col-sm-7 m-0;">
        <p class="mb-0">
            <strong>
                <?php setlocale(LC_ALL, 'ja_JP.UTF-8'); echo $dt::now()->formatLocalized('%Y/%m/%d/(%a)'); ?>
            </strong>
        </p>
        <div class="dropdown-divider col-12"></div>
        @if(isset($plans->mon_t))
            <p class="mb-0">今日の学習予定時間：{{ $plans->mon_t }}分</p>
            <p>{{ $plans->mon_c }}</p>
        @else
            <p>計画が設定されていません。</p>
        @endif
        
        
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>今日の学習時間</th>
                    <td>@if(isset($today_times))
                            {{ $today_times }}分
                        @else
                            0分
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>今月の合計学習時間</th>
                    <td>@if(isset($month_times))
                            {{ $month_times }}分
                        @else
                            0分
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>先月の合計学習時間</th>
                    <td>@if(isset($lastmonth_times))
                            {{ $lastmonth_times }}分
                        @else
                            0分
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>累計学習時間</th>
                    <td>@if(isset($total_times))
                            {{ $total_times }}分
                        @else
                            0分
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
        
        <!--<div class="row">-->
        <!--    <h4 class="col-7">-->
        <!--        今日の学習時間-->
        <!--        </h4>-->
        <!--    <div class="col-5">-->
        <!--        @if(isset($today_times))-->
        <!--            {{ $today_times }}分-->
        <!--        @else-->
        <!--            0分-->
        <!--        @endif-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="row">-->
        <!--    <h4 class="col-7">-->
        <!--        今月の合計学習時間-->
        <!--    </h4>-->
        <!--    <div class="col-5">-->
        <!--        @if(isset($month_times))-->
        <!--            {{ $month_times }}分-->
        <!--        @else-->
        <!--            0分-->
        <!--        @endif-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="row">-->
        <!--    <h4 class="col-7">-->
        <!--        先月の合計学習時間-->
        <!--    </h4>-->
        <!--    <div class="col-5">-->
        <!--        @if(isset($lastmonth_times))-->
        <!--            {{ $lastmonth_times }}分-->
        <!--        @else-->
        <!--            0分-->
        <!--        @endif-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="row">-->
        <!--    <h4 class="col-7">-->
        <!--        累計学習時間-->
        <!--    </h4>-->
        <!--    <div class="col-5">-->
        <!--        @if(isset($total_times))-->
        <!--            {{ $total_times }}分-->
        <!--        @else-->
        <!--            0分-->
        <!--        @endif-->
        <!--    </div>-->
        <!--</div>-->
    </div>
    
</div>    
    



    