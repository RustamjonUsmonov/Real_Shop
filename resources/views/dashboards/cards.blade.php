<div class="col mb-5">
    <div class="card h-100">
        @if($products->sale)
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
    @endif
    <!-- Product image-->
        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..."/>
        <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">{{$products->name}}</h5>
                <p>{{substr($products->descr,0,100).'...'}} </p>
                <!-- Product price-->
                <span class="badge badge-warning font-weight-bold"><h4>${{round($products->price/100,2)}}</h4></span>
            </div>
        </div>
        <!-- Product actions-->
        <div class="card-footer pb-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center">
                <a class="btn btn-outline-dark mt-auto" href="{{--{{route('show-single',$products->id)}}--}}">View options</a>
            </div>
        </div>
    </div>
</div>
