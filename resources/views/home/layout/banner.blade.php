<div class="header_bottom">
    <div class="header_bottom_left">
        <div class="categories">
            <ul>
                <h3>电影点击榜</h3>
                @foreach($click as $k => $v)
                <li><a href="{{url('filmdetails/'.$v -> id)}}">{{$v -> name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="header_bottom_right">
        <!------ Slider ------------>
        <div class="slider">
            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                    @foreach(config('banner') as $k => $v)
                    <a title="{{ $v['title'] }}" href="{{ $v['url'] }}" target="_blank"><img src="{{ asset($v['pic']) }}" data-thumb="{{ asset($v['pic']) }}" alt="" /></a>
                    @endforeach
                </div>
            </div>
        </div>
        <!------End Slider ------------>
    </div>
    <div class="clear"></div>
</div>