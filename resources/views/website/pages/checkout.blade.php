@extends('website.layout.main_website')
@section('content')
    <div class="container mt-5">
        <h5>THONG TIN THANH TOAN</h5>
        <form action="{{ url('place-order') }}" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-7">
                    <div class="row">
                        <div class="col-12">
                            <label for="">Ten*</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->name }}" placeholder="Ten" name="fname" />
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <label for="">Dia Chi*</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->address }}" placeholder="Dia chi" name="address" />
                        </div>
                        <div class="col-12 mt-3">
                            <label for="">Tinh / Thanh pho*</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->city }}" name="city" />
                        </div>
                        <div class="col-12 mt-3">
                            <label for="">So dien thoai*</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->phone }}" name="phone" />
                        </div>
                        <div class="col-12 mt-3">
                            <label for="">Dia chi email*</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->email }}" name="email" />
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <h3>DON HANG CUA BAN</h3>
                    <table class="table table-striped ">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th class="text-center">Qty</th>
                            <th class="text-center">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(Session::has("Cart") != null)
                            @foreach(Session::get('Cart')-> products as $item)
                                <tr>
                                    <td>{{$item['productInfo']->name}}</td>
                                    <td class="text-center">{{$item['quantity']}}</td>
                                    <td class="text-center">{{number_format($item['price'])}} ₫</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                        <div class="">

                        </div>
                    </table>
                    <hr>
                    <button type="submit" class="btn btn-primary float-end">Place Order</button>
                </div>
            </div>
        </form>
    </div>
@endsection


@section('scripts')


@endsection
