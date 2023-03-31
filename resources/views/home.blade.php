@extends('../Navs/navHome')
@section('content')
    <!-- Start Swipper Section -->
    <div class="slideshow-container">
        <swiper-container class="">
            <swiper-slide id="H1" class="">
                <div
                    class="landing Header1 position-relative text-light d-flex justify-content-center align-items-center m-auto H2">
                    <div class="text-center row ">
                        <h1 class="Head">Fresh, Save quality meats</h1>
                        <p class="text-white w-35 m-auto text-center">
                            Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Error magni voluptatibus
                            voluptatum neque quaerat sit..? Minus optio
                            maxime dolor sed quibusdam inventore magnam
                            cumque perferendis in neque?
                            <br>
                            <a class="btn main-btn rounded-pill mt-3 Col-Wow" href="product">Shop Now</a>
                        </p>
                        <div class="position-absolute mt-5 ms-2 d-flex align-items-center justify-content-sm-between">
                            <i class="fas fa-chevron-left" onclick="Prev()"></i>
                            <i class="fas fa-chevron-right" onclick="Next()"></i>
                        </div>
                    </div>
                </div>
            </swiper-slide>

            <swiper-slide id="H3" class="d-none">
                <div class="landing Header3 position-relative text-light d-flex justify-content-start align-items-center">
                    <div class="text-start row">
                        <div class="col-4 ms-5 ps-5">
                            <h1 class="Head">Quality Tested</h1>
                            <p class="text-white">
                                Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Error magni voluptatibus
                                voluptatum neque quaerat sit..? Minus optio
                                maxime dolor sed quibusdam inventore magnam
                                cumque perferendis in neque?
                                <br>
                                <a class="btn main-btn rounded-pill mt-3" href="product">Shop Now</a>
                            </p>
                        </div>
                        <div class="position-absolute mt-5 ms-2 d-flex align-items-center justify-content-sm-between">
                            <i class="fas fa-chevron-left mt-2" onclick="Prev()"></i>
                            <i class="fas fa-chevron-right mt-2" onclick="Next()"></i>
                        </div>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide id="H2" class="d-none">
                <div class="landing Header2 position-relative text-light d-flex justify-content-end align-items-center">
                    <div class="text-end row">
                        <div class="col-4 ms-auto me-5 pe-5">
                            <h1 class="Head">Quality Tested</h1>
                            <p class="text-white">
                                Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Error magni voluptatibus
                                voluptatum neque quaerat sit..? Minus optio
                                maxime dolor sed quibusdam inventore magnam
                                cumque perferendis in neque?
                                <br>
                                <a class="btn main-btn rounded-pill mt-3" href="product" >Shop Now</a>
                            </p>
                        </div>

                        <div class="position-absolute mt-5 mx-2 d-flex align-items-center justify-content-sm-between">
                            <i class="fas fa-chevron-left mt-2" onclick="Prev()"></i>
                            <i class="fas fa-chevron-right mt-2" onclick="Next()"></i>
                        </div>
                    </div>
                </div>
            </swiper-slide>
        </swiper-container>
    </div>

    <!-- End Swipper Section -->

    <!-- Start Popular Products -->
    <div class=" bg-white justify-content-center pt-lg-3">
        <div class="PopProducts mb-5">
            <div class="container-fluid test_container mySwiper text-center">
                <h3 class="pt-5 text-black mb-lg-5">
                    Popular Products
                </h3>
                <div class="swiper-wrapper pe-4">
                    @foreach ($products as $product)
                    <article class=" col swiper-slide ms-3 mt-5" style="">
                        <div class="card Grap" style="width: 20rem; background-color: #f5f5f5;">
                            <img style="height: 260px;" src="/{{$product->image}}" class="card-img BC pt-4 pe-5 ps-5"
                                alt="..." />
                            <div class="card-body">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <h6>{{App\Models\Category::find($product->categories_id)?->catname}}</h6>
                                <h5 class="card-def fw-bold mt-2">
                                    {{$product->title}}
                                </h5>
                                <h5 class="card-def my-0 PRICE">
                                    {{$product->prize}}
                                </h5>
                                <a role="button" class="btn main-btn rounded-pill" onclick="AddToCart('{{$product->id}}')">Add to cart</a>
                            </div>
                        </div>
                    </article>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Products -->

    <!-- Start Best Quality Check -->
    <div
        class="container-fluid Quality-check position-relative justify-content-center align-items-center d-flex m-auto top-0 start-0 end-0">
        <div class="position-absolute Layer justify-content-center">
            <div class="row w-75 mx-auto mt-50">
                <div class="col-5 ms-lg-5">
                    <img src="Images/Q1.webp" class="ms-4 w-100 rounded-start-5" alt="" srcset="" />
                </div>
                <div class="col-5 pt-5 fw-bolder bg-white text-black p-4 rounded-end-5">
                    <h2 class="mt-5 mb-4"></h2>
                    <h2 class="mt-5">Best Quality Check</h2>
                    <div class="row justify-content-center Fs-0 mt-5">
                        <div class="col-2 me-5">
                            <img src="Images/Q2.png" class="text-center ms-3" style="margin-bottom: 15px"
                                alt="" />
                            Antibacterial Treatment
                        </div>
                        <div class="col-2 mx-3">
                            <img src="Images/Q3.png" class="text-center ms-3" style="margin-bottom: 15px"
                                alt="" />
                            Temperature Control
                        </div>
                        <div class="col-2 mb-4 ms-5">
                            <img src="Images/Q4.png" class="text-center ms-3" style="margin-bottom: 15px"
                                alt="" />
                            Laboratory Testing
                        </div>
                    </div>
                    <p class="Fs-0 fw-normal mt-5">
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                        Quis ipsum suspendisse ultrices gravida.
                    </p>
                    <a href="product" id="ShopNow" class="btn main-btn rounded-pill" >Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Best Quality Check -->

    <!-- Start Features -->



    <div class="container row Features align-middle m-auto ">

        <table class="d-lg-inline-block align-middle m-auto " width="100%" cellspacing="2px"
            style="border-spacing: 30px;">
            <tbody class="m-auto ">
                <td class="TB MT" width="15%" onmouseover="chg_col1('#000')" onmouseout="chg_col1('#aa1936')">
                    <i id="a1" class="fs-3 MT-Icon ps-2 mb-3 pt-1 fa-solid fa-leaf"></i>
                    <h6 class="text-black">100% ASSURANCE</h6>
                    <p class="Fs--0 text-black">Lorem ipsum dolor sit amet</p>
                </td>
                <td width="2.5%"></td>
                <td class="TB MT" width="15%" onmouseover="chg_col2('#000')" onmouseout="chg_col2('#aa1936')">
                    <i id="a2" class="fs-3 MT-Icon ps-2 mb-3 pt-1 fa-solid fa-truck"></i>
                    <h6 class="text-black">EXPRESS DELIVERY</h6>
                    <p class="Fs--0 text-black">Id ornare arcu odio ut marqu</p>
                </td>
                <td width="2.5%"></td>
                <td class="TB MT" width="15%" onmouseover="chg_col3('#000')" onmouseout="chg_col3('#aa1936')">
                    <i id="a3" class="fs-3 MT-Icon ps-2 mb-3 pt-1 fa-solid fa-shield"></i>
                    <h6 class="text-black">SECURE</h6>
                    <p class="Fs--0 text-black">Metus dictum at tempor que</p>
                </td>
                <td width="2.5%"></td>
                <td class="TB MT" width="15%" onmouseenter="chg_col4('#000')" onmouseleave="chg_col4('#aa1936')">
                    <i id="a4" class="fs-3 MT-Icon ps-2 mb-3 pt-1 fa-solid fa-undo"></i>
                    <h6 class="text-black">60 DAYS FREE RETURNS</h6>
                    <p class="Fs--0 text-black">Pulvinar mattis nunc sed elit</p>
                </td>
            </tbody>
        </table>
    </div>
    <!-- End Features -->
@stop
