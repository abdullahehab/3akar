@if(count($bu) > 0)

    <div class="container">
        @foreach(array_chunk($bu, 3) as $key)
            <div class="row">
                @foreach($key as $add)
                    <div class="col-md-3">
                        <span class="thumbnail">
                            <img src="https://s12.postimg.org/41uq0fc4d/item_2_180x200.png" alt="...">
                            <h4>Product Tittle</h4>
                            <div class="ratings">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <hr class="line">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <p class="price">$29,90</p>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                 <a href="http://cookingfoodsworld.blogspot.in/" target="_blank" >	<button class="btn btn-info right" > BUY ITEM</button></a>
                                </div>

                            </div>
                        </span>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
            {{--@foreach($bu as $key => $b)
                <div class="row">



                </div>
                --}}{{-- To devide item to 4 in each row --}}{{--

                --}}{{--<div class="container">
                  <div class="row">
                      <div class="col-md-3 col-sm-6">
                        <span class="thumbnail">
                            <img src="https://s12.postimg.org/41uq0fc4d/item_2_180x200.png" alt="...">
                            <h4>Product Tittle</h4>
                            <div class="ratings">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <hr class="line">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <p class="price">$29,90</p>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                 <a href="http://cookingfoodsworld.blogspot.in/" target="_blank" >	<button class="btn btn-info right" > BUY ITEM</button></a>
                                </div>

                            </div>
                        </span>
                    </div>
                    </div>
                </div>--}}{{--
              --}}{{--      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="my-list">
                            <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" />
                            <h3>{{$b->bu_name}}</h3>
                            <span>Square : {{ $b->bu_square }}</span>
                            <span>Price : {{ $b->bu_price }}</span>
                            <span>Country : {{ buCountry()[$b->bu_place]  }}</span>
                            <span>Type : {{ buType()[$b->bu_type] }}</span>
                            <span>Operation : {{ buRent()[$b->bu_rent] }}</span>
                            <div class="detail">
                                <p>{{str_limit($b->bu_name)}}</p>
                                <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" />
                                <a href="{{ url('/singleBuilding/'.$b->id) }}" class="btn btn-info center-block">Detail</a>
                            </div>
                        </div>
                    </div>--}}{{--
            @endforeach--}}

@else
    <div class="alert alert-danger">
        There are currently no All Real Estate
    </div>

@endif