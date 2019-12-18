    @if(isset($is_image))
        <p><img src="/storage/profile_images/{{ Auth::id() }}.jpg" width="100px"></p>
    @else
        <p>アイコンが登録されていません。</p>
    @endif
    
    @if(isset($name))
        <p>{{ $name }}</p>
    @else
        <p>名前が登録されていません。</p>
    @endif
    
    @if(isset($content))
        <p>{{ $content }}</p>
    @else
        <p>自己紹介が登録されていません。</p>
    @endif
    