@if(isset($reports->time))
       <p>今日は{{$reports->title}}を{{ $reports->time }}分学習しました。</p>
@else

<p>まだ投稿がありません。</p>
　　　　
@endif