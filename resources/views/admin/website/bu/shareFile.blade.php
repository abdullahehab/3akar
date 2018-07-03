@if(count($bu) > 0)

    @foreach($bu as $b)
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="my-list">
                    <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" />
                    <h3>{{$bu->bu_name}}</h3>
                    <span>RS:45K</span>
                    <span class="pull-right">{{$bu->bu_price}}</span>
                    <div class="detail">
                        <p>{{str_limit($bu->bu_small_des, 65)}}</p>
                        <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" />
                        <a href="#" class="btn btn-info">Add To Cart</a>
                        <a href="#" class="btn btn-info">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@else
    <div class="alert alert-danger">
        There are currently no All Real Estate
    </div>

@endif