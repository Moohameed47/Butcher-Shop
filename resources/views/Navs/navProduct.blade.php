<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Link CSS Files -->
	<link rel="stylesheet" href="{{asset('CSS/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="{{asset('CSS/all.css')}}" />
	<link rel="stylesheet" href="{{asset('CSS/style.css')}}" />
	<link rel="stylesheet" href="{{asset('CSS/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>

	<!-- E-N-D -->
</head>

<body>
	<!-- Start Nav-Bar -->
	<nav class="navbar navbar-expand-lg sticky-top bg-white">
		<div class="container-fluid mx-2  Color-Nav">
			<a href="home">
				<img src="Images/Logo3.png" class="w-0 ps-5" alt="" srcset="">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<i class="fa-solid fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
					<li class="nav-item ">
						<a class="nav-link p-2  fs-5 Color-Nav" aria-current="page" href="home">Home</a>
					</li>
					<li class="nav-item mx-lg-5">
						<a class="nav-link px-2 active fs-5 Color-Nav" href="product">Products</a>
					</li>
					<li class="nav-item">
						<a class="nav-link p-2  fs-5 Color-Nav" href="about">About Us</a>
					</li>
				</ul>
				<div class=" ps-3 pe-3 me-5 d-inline fs-5">
                    @if(auth()->user())
                        <div class="icon d-inline">
                            {{-- <a href="" class="fa-solid fa-user me-2 "></a> --}}
                                <a>Welcome {{auth()->user()->name}}</a>
                        </div>
                    @endif
					<div class="icon d-inline mx-3"><a href="/cart" class="fa-solid fa-cart-shopping"></a></div>
					<div class="icon d-inline"><a href="/logout" class="fa-solid fa-right-from-bracket"></a></div>



				</div>
			</div>
		</div>
	</nav>
	<!-- End Nav-Bar -->
    @yield("content")

    
    <i class='Message far fa-comments bg-white  px-2 py-1' style='font-size:26px;'></i>

    <!-- Start Footer Section -->
    <footer class="text-center text-lg-start text-muted Bg-Footer">
        <section class="Fs-0 pt-5 w-100">
            <div class="container-fluid text-center text-md-start">
                <div class="container pt-3 w-75">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-xl-3 me-5 mb-md-0 mb-4 w-35">
                            <h6 class="fw-bold mb-4 text-white fw-bolder UL">
                                Contact
                            </h6>
                            <p class="text-white">
                                <i class="fas fa-home me-3 Fs-0 text-Icons "></i>
                                58 East Madison St, Baltimore, MD
                            </p>
                            <p class="text-white">
                                <i class="fas fa-envelope me-3 Fs-0 my-3 text-Icons  "></i>
                                info@example.com
                            </p>
                            <p class="text-white">
                                <i class="fas fa-phone me-3 Fs-0 text-Icons "></i>
                                +20 1 234 567 88
                            </p>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3 mb-md-0 mb-4 w-20">
                            <h6 class="fw-bold mb-4 text-white fw-bolder UL ML-1">
                                Support
                            </h6>
                            <ul style="list-style-type: none" class="">
                                <li class="mb-2 I-H">
                                    <a class="text-decoration-none I-H" href="about">About Us</a>
                                </li>
                                <li class="mb-2 I-H">
                                    <a class="text-decoration-none I-H" href="product">Products</a>
                                </li>
                                <li class="mb-2 I-H">
                                    <a class="text-decoration-none I-H" href="#">Refund & return</a>
                                </li>
                                <li class="mb-2 I-H">
                                    <a class="text-decoration-none I-H" href="#">Delivery Information</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-lg-4 col-xl-3 ms-auto text-white w-35">
                            <h6 class="fw-bold mb-4 fw-bolder">
                                <i class="fa-solid fa-skull-cow me-3 text-Icons"></i>Butcher Shop
                            </h6>
                            <p class="Footer-P">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Harum velit, officiis
                                similique commodi nemo aperiam
                                voluptatibus quidem qui provident sunt
                                molestias maiores fuga incidunt, odit
                                eaque debitis tempore blanditiis
                                accusantium?
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
                <h6 class="text-center text-white-50">
                    <!-- &copy; E-M-M-I-N-T-Y -->
                </h6>
            </div>
        </section>
    </footer>
    <!-- End Footer Section -->

    <!-- Link JS Files -->
    <script src="{{asset("JS/swiper-bundle.min.js")}}"></script>
    <script src="{{asset("JS/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("JS/bootstrap.min.js")}}"></script>
    <script src="{{asset("JS/Script/scriptProduct.js")}}"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- E-N-D -->
</body>

</html>
