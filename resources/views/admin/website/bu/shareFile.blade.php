@if(count($bu) > 0)
            <div class="row">
                @foreach($bu as $b)
                    <div class="col-md-4">
                        <div class="productbox">
                            <img src="http://lorempixel.com/460/250/" class="img-responsive">
                            <div class="producttitle">{{ $b->bu_name }}</div>
                            dic
                            <p class="text-justify">The product is the greatest product ever, it will do what it's designed for. No more, no less.</p>
                            <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-primary btm-sm" role="button">Add to <span class="glyphicon glyphicon-shopping-cart"></span></a></div><div class="pricetext">8.95 €</div></div>
                        </div>
                    </div>
                @endforeach
            </div>
@else
    <div class="alert alert-danger">
        There are currently no All Real Estate
    </div>

@endif