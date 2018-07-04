@if(count($bu) > 0)

    {{-- Devide array to 4 items for each row --}}
    @foreach(array_chunk($bu, 4) as $buu)
        <div class="row">
            @foreach($buu as $b)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="my-list">
                            <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" />
                            <h3>{{$b['bu_name']}}</h3>
                            <span>Month Added : {{$b['created_at'][6]}}</span> {{-- 6 is the index of month in array --}}
                            <span class="pull-right">{{$b['bu_price']}}</span>
                            <div class="detail">
                                <p>{{str_limit($b['bu_name'], 65)}}</p>
                                <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" />
                                <a href="#" class="btn btn-info">Add To Cart</a>
                                <a href="#" class="btn btn-info">Detail</a>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    @endforeach

@else
    <div class="alert alert-danger">
        There are currently no All Real Estate
    </div>

@endif