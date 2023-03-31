@extends('../Navs/navCart')
@section('content')

    <!-- Start Photo With Layer -->
    <div class="AboutLogo position-relative text-black d-flex justify-content-center align-items-center m-auto">
        <div class="text-center row text-white">
            <h1 class="Head">Your Shopping Cart</h1>

            <h3 class="fs-6">
                <a href="home" class="Hover">Home</a> / Your Shopping Cart
            </h3>
        </div>
    </div>
    <!-- End Photo With Layer -->

    <div class="container CART pt-5 d-flex align m-auto justify-content-center ">
        <div class="row mt-5 w-100 ">
            <div class="col-1"></div>
            <div class="col-7 Cart-Items">
                <h4 class="mb-3 fw-normal">Products</h4>

                @foreach ($items as $item)
                @php
                    $product = App\Models\Product::find($item->product_id);
                @endphp
                <div class="container-fluid AllCart row py-3 my-2 ps-2 fs-6 fw-medium rounded-1 position-relative Cart-row">
                    <div id="Pro2" class="row">
                        <div class="col-4 Grap p-0">
                            <img src="/{{$product?->image}}" class="w-100 h-100 p-1 rounded-3" alt=""
                                srcset="">
                        </div>
                        <div class="col-6 py-3 ms-4">
                            <div id="" class="mb-3 NameProd">
                                {{$product?->title}}
                            </div>
                            <div class="d-inline">
                                <div id="" class="d-inline Cart-Price">
                                    {{$product?->prize}}
                                </div>
                                E£
                            </div>
                            <div class="Quantity mt-3 mb-3 ">
                                <div class="d-inline pt-2 ">
                                    <button style="width:28px;height:27.5px;" id="down" class="rounded-start-1 SYP"
                                        onclick=" setQuantity('down','Pro2', '{{$item->product_id}}')">-</button>
                                    <input type="text" value="{{$item->quantity}}"
                                        style="width:35px;margin-left:-5px;margin-right:-5px;height:26.9px;"
                                        class="rounded-0 text-center Cart-Quantay" id="quantity" />
                                    <button style="width:28px;height:27.5px;" id="up" class="rounded-end-1 SYP"
                                        onclick=" setQuantity('up','Pro2', '{{$item->product_id}}')">+</button>
                                </div>
                            </div>

                            <div   class="d-inline">
                                <div id="" class="d-inline mb-3 TotPrice">
                                    {{(int)$product?->prize * $item->quantity}}
                                </div>
                                E£
                            </div>
                            <div class="position-absolute">
                                <i id="{{$item->product_id}}" class="fa-duotone fa-square-xmark XICON ms-5" style="color:var(--WOW)"
                                    onclick=""></i>
                            </div>
                        </div>
                    </div>
                </div>


                @endforeach
            </div>

            <div class="col-4 ">
                <h4 class="mb-3 fw-normal mt-4">Order Summary</h4>
                <h6 class="me-1 fw-bold  Price">SubTotal : <label for="" class="Final"> </label></h6>
                <h6 class="me-1 fw-bold">Delivery Fees : <label for=""> </label> Free</h6>
                <br>
                <h6 class="me-1 fw-bold Price">Total : <label for="" class="Final"> </label></h6>
                <a href="checkout" class="btn main-btn rounded-pill mt-5 w-75 py-2 Fs-0" onclick="">
                    Proceed to Checkout
                </a>
                <a href="product" class="btn main-btn rounded-pill mt-2 w-75 py-2 Fs-0" onclick="">
                    Continue To Shopping
                </a>

            </div>
        </div>
    </div>

@stop
