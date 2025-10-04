@extends('app.layouts.master')

@section('content')
            <div class="col">
                @foreach($products as $product)
                <div class="card h-100 shadow-sm">
                    <img src="{{asset('theme/images/5af568b4909435c6a215ad5e728e902db234b673_1736597759.webp')}}" class="card-img-top" alt="گوشی">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->title}}</h5>
                        <p class="card-text text-muted">قیمت: ۵,۰۰۰,۰۰۰ تومان</p>
                        <span >
{{--                                {{dd($product)}}--}}
                            {{ $product->created_at_jalali }}
{{--                            {{ \Morilog\Jalali\Jalalian::forge($product->created_at)->format('Y/m/d H:i')}}--}}

                        </span>
                        <a href="product.html" class="btn btn-danger w-100">مشاهده</a>
                    </div>
                </div>
               ])) @endforeach
            </div>
@endsection
