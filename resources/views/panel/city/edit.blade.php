@extends('panel.layouts.master')

@section('content')
    <div class="row">
        {{--        form--}}
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">ویرایش شهر </h5>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('city.update',$city->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">نام شهر را وارد کنید </label>
                            <input type="text" value="{{$city->title}}" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
