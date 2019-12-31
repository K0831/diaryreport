    @if(isset($is_image))
        <p><img src="/storage/profile_images/{{ Auth::id() }}.jpg" width="100px"></p>
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
    