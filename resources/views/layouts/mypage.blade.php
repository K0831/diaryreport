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
            <p class="mb-0">今日の学習予定時間：{{ $today_p }}分</p>
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
        
       
    </div>
    
</div>    

@if(isset($plans))

<div class="row">
        
<canvas class ="col-6" id="myChart"></canvas>
<canvas class ="col-6" id="myChart2"></canvas>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js"></script>

<script>

const today_times = @json($today_times);
const yesterday_times = @json($yesterday_times);
const three_times = @json($three_times);
const four_times = @json($four_times);
const five_times = @json($five_times);
const six_times = @json($six_times);
const seven_times = @json($seven_times);

const today_p = @json($today_p);
const yesterday_p = @json($yesterday_p);
const three_p = @json($three_p);
const four_p = @json($four_p);
const five_p = @json($five_p);
const six_p = @json($six_p);
const seven_p = @json($seven_p);

const month_times = @json($month_times);
const lastmonth_times = @json($lastmonth_times);
const total_times = @json($total_times);

const month = @json($month);
const day = @json($day);
const day_1 = @json($day_1);
const day_2 = @json($day_2);
const day_3 = @json($day_3);
const day_4 = @json($day_4);
const day_5 = @json($day_5);
const day_6 = @json($day_6);

const day_month = month+"/"+day;
const day_1_month = month+"/"+day_1;
const day_2_month = month+"/"+day_2;
const day_3_month = month+"/"+day_3;
const day_4_month = month+"/"+day_4;
const day_5_month = month+"/"+day_5;
const day_6_month = month+"/"+day_6;
    
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels:[day_6_month,day_5_month,day_4_month,day_3_month,day_2_month,day_1_month,day_month],
        datasets: [
            {
                label: '目標学習時間',
                data: [seven_p,six_p,five_p,four_p,three_p,yesterday_p,today_p],
                borderColor:"rgba(255,153,0,0.4)",
                backgroundColor: "rgba(0,0,0,0)"
            },
            {
                label: '実行学習時間',
                data: [seven_times,six_times,five_times,four_times,three_times,yesterday_times,today_times],
                borderColor:"rgba(179,11,198,0.4)",
                backgroundColor: "rgba(0,0,0,0)"
            }
        ]
    },
    options: {
        title: {
            display: true,
            text: '今週の学習時間'
        }
    }
});
    
var ctx = document.getElementById("myChart2");
var myChart2 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels:["今日","今月","先月","累計"],
        datasets: [
        {
            label: "全体の学習時間",
            data: [today_times,month_times,lastmonth_times,total_times],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
            
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ]
        }]
    }
});
</script>

@else

<br><br><br>
<p class="text-center mt-5">チャートデータがありません</p>

@endif