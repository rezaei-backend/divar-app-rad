@extends('panel.layouts.master')

@section('content')
    <div class="row">
        {{--        table--}}
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Borderless table</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless table-dark">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">عنوان </th>
                                <th scope="col">عملیات </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <th scope="row">1</th>
                                    <th>{{$product->title}}</th>
                                    <th>{{$product->category->title ?? "دسته بندی ندارد"}}</th>
                                    <th>
                                        <a href="{{route('panelproduct.edit' , $product->id)}}" class="btn btn-primary"> ویرایش</a>
                                        <button class="btn btn-danger"> حذف</button>
                                    </th>
                                    <th>
                                        <img width="50px" src="{{ asset($product->category_image) }}">
                                    </th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{--        form--}}
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">ثبت شهر </h5>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('panelproduct.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">نام دسته بندی را وارد کنید </label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> تصویر دسته بندی را وارد کنید </label>
                            <input type="file" name="category_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
