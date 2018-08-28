@if(count($bu) > 0)
    @foreach($bu as $key => $b)
        @if($key % 3 == 0 && $key !=0)
            <div class="clearfix"></div>
        @endif
        <div class="col-md-4">
            <div class="productbox">
                <img src="http://lorempixel.com/460/250/" class="img-responsive">
                <div class="producttitle">{{ $b->bu_name }}</div>
                <p class="text-justify">{{ str_limit($b->bu_small_des, 70) }}</p>

                <div class="productprice ">

                    <span class="pull-right">
                        المساحه : {{ $b->bu_square }}
                    </span>
                    <span class="pull-left">
                        نوع العمليه : {{ buRent()[$b->bu_rent] }}
                    </span>
                    <div class="clearfix"></div>

                    <hr>
                    <div class="pull-right">
                        <a href="{{ url('singleBuilding/'.$b->id) }}" class="btn btn-primary btm-sm" role="button">إظهار التفاصيل
                            <span class="fa fa-arrow-circle-o-right" style="color:#FFFFFF"></span>
                        </a>
                    </div>
                    <div class="pricetext">{{ $b->bu_price }}</div>
                </div>
            </div>
        </div>

    @endforeach

    <div class="clearfix"></div>
    <br>
@else
    <div class="alert alert-danger">
        There are currently no All Real Estate
    </div>

@endif