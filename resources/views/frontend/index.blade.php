
@extends('frontend.layouts.main')
@section('main-content')

<div class="body-content">
	<div id="about" class="container-fluid bg " style="padding: unset;background-color: black;">
		<div class="tooltip_img">
			<img  src="{{url('frontend/images/1.jpg')}}" alt="" >
			<b>Hello, I am </b>
		</div>

		<div class="img_text col-12">
			<h4>Mr. Zeeshan Noor</h4>
			<p>I would love to design and develop your website</p>
			<form method="get" action="{{url('frontend/documents/Zeeshan.pdf')}}">
			<Button type ="submit"class="cv btn" id="" >Download CV</Button>
			</form>
		</div>
	</div>

	<!-- Skils section -->

	<div class="container-fluid struggle-skills" style="background-color: rgb(0, 0, 0);">
		<div class="row">
			<div class="col-10 col-sm-6 col-md-5 col-lg-5  mt-2 ">
				<img class="struggle_img" src="{{url('frontend/images/3.jpg')}}">
			</div>
			<div class="col-10 col-sm-5 col-md-7 col-lg-7 mr-2  " >
				<h4 class="mt-4 mt-sm-0" id="myskills">Read About My Skills!</h4> 
				<div class="struggle-text">
					<h6 class="mt-2 skills-head">Adobe PS</h6>
					<div class="container-skills  "style="">
						<div class="skills ps"></div>
					</div>

					<h6 class="mt-2 skills-head">Html</h6>
					<div class="container-skills ">
						<div class="skills html"></div>
					</div>
					<h6 class="mt-2 skills-head">Css</h6>
					<div class="container-skills  "style="">
						<div class="skills css"></div>
					</div>

					<h6 class="mt-2 skills-head">Bootstrap</h6>
					<div class="container-skills  "style="">
						<div class="skills bootstrap"></div>
					</div>

					<h6 class="mt-2 skills-head">C++</h6>
					<div class="container-skills  "style="">
						<div class="skills c-plus"></div>
					</div>

					<h6 class="mt-2 skills-head">PHP/Laravel</h6>
					<div class="container-skills  "style="">
						<div class="skills php"></div>
					</div>
				</div>
				<div class="row "> 
				<Button type ="submit"class="hire btn  col-4 col-sm-4 col-md-3"><a target="blank" class="nav-link"href="https://www.fiverr.com/zeeshan_noorr?up_rollout=true">Hire Me!</a></Button>
				<Button onclick="getId()" type ="submit"class="about btn col-4 col-sm-4 col-md-3 "> <a href="#about-myself">About Me</a> </Button>
				</div>
			</div>
		</div>
	</div>

	<!-- Services Section -->

	<div class="container-fluid mb-5" >
		<div class="text-center mt-5 "><h4>Services</h4></div>
		
		<div class="row mt-4 row-data  ">
			<div class="col-8 col-sm-5 col-lg-3 row social_post mx-lg-1">
				<div class=" circle mt-1 ">
				</div>
				<div>
					<i class="icon  fa-sharp fa-solid fa-bezier-curve "></i>
				</div>
				<div class="col-8">
					<p class="services-text mt-2  ">Social Media Post</p>
				</div>
			</div>

			<div class="col-8 col-sm-5 col-lg-3 row social_post mt-3 mt-sm-0 mx-sm-4 mx-lg-1">
				<div class=" circle mt-1 ">
				</div>
				<div>
					<i class=" icon fa-sharp fa-solid fa-code"></i>
				</div>
				<div class="col-8">
					<p class="services-text mt-2  ">Web Development</p>
				</div>
			</div>

			<div class="col-8 col-sm-5  col-lg-3 row social_post mt-3 mt-sm-2 mt-lg-0 mx-lg-1 ">
				<div class=" circle mt-1 ">
				</div>
				<div>
					<i class=" icon fa-solid fa-wand-magic-sparkles"></i>
				</div>
				<div class="col-8">
					<p class="services-text mt-2  ">Web Designing</p>
				</div>
			</div>

			<div class="col-8 col-sm-5  col-lg-3 row social_post mt-3 mt-sm-2 mt-lg-2 mx-sm-4 mx-lg-1">
				<div class=" circle mt-1 ">
				</div>
				<div>
					<i class="icon2 fa-solid fa-pen-to-square"></i>
				</div>
				<div class="col-8">
					<p class="services-text mt-2  ">Logo Designing</p>
				</div>
			</div>

			<div class="col-8 col-sm-5 col-lg-3 row social_post mt-3 mt-sm-2 mx-lg-1 ">
				<div class=" circle mt-1 ">
				</div>
				<div>
					<i class="icon2 fa-brands fa-laravel"></i>
				</div>
				<div class="col-8">
					<p class="services-text mt-2  ">Laravel CRUD</p>
				</div>
			</div>

			<div class="col-8 col-sm-5 col-lg-3 mt-3 mt-sm-2 mx-lg-1 mx-sm-4 row social_post">
				<div class=" circle mt-1 ">
				</div>
				<div>
					<i class="icon2 fa-solid fa-puzzle-piece"></i>
				</div>
				<div class="col-8">
					<p class="services-text mt-2  ">Problem Solving</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Portfolio Section -->

	<div class=" container-fluid portfolio mb-2"><br>
		<div class="text-center mt-3"><h4>Portfolio</h4></div>
		<div class="row mt-4 mx-5  mx-sm-0 mx-md-0 ">
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">     
					<div class="content">
						<div class="content-overlay"></div>
						<img src="{{url('frontend/images/graphics1.jpg')}} " alt="" width="100%">
						<div class="content-details fadeIn-bottom">
							<h6 class="content-title">Social Media Post</h6>
							<p class="content-text">For BookFlix App</p>
						</div>
					</div>
			</div>

			<div class="mt-4  mt-sm-0  col-12 col-sm-6 col-md-4 col-lg-3">
				<div class="content">
					<div class="content-overlay"></div>
					<img src="{{url('frontend/images/graphics2.jpg')}} " alt="" width="100%">
					<div class="content-details fadeIn-bottom">
						<h6 class="content-title">Social Media Post</h6>
						<p class="content-text">For Construction App</p>
					</div>
				</div>
			</div>

			<div class="mt-4  mt-sm-4 mt-md-0 col-12 col-sm-6 col-md-4 col-lg-3">
				<div class="content">
					<div class="content-overlay"></div>
					<img src="{{url('frontend/images/graphics4.jpg')}} " alt="" width="100%">
					<div class="content-details fadeIn-bottom">
						<h6 class="content-title">Social Media Post</h6>
						<p class="content-text">For Digital Marketing</p>
					</div>
				</div>
			</div>

			<div class="mt-4 mt-md-4 mt-sm-4 mt-lg-0 col-12 col-sm-6 col-md-4 col-lg-3">
				<div class="content">
					<div class="content-overlay"></div>
					<img src="{{url('frontend/images/graphics6.jpg')}}" alt="" width="100%">
					<div class="content-details fadeIn-bottom">
						<h6 class="content-title">Social Media Post</h6>
						<p class="content-text">For Fast Food</p>
					</div>
				</div>
			</div>

			<div class="mt-4 col-12 col-sm-6 col-md-4 col-lg-3">     
				<div class="content">
					<div class="content-overlay"></div>
					<img src="{{url('frontend/images/graphics3.jpg')}}" alt="" width="100%">
					<div class="content-details fadeIn-bottom">
						<h6 class="content-title">Social Media Post</h6>
						<p class="content-text">For Hiring Developer</p>
					</div>
				</div>
			</div>

			<div class="mt-4  mt-sm-4  col-12 col-sm-6 col-md-4 col-lg-3">
				<div class="content">
					<div class="content-overlay"></div>
					<img src="{{url('frontend/images/graphics5.jpg')}}" alt="" width="100%">
					<div class="content-details fadeIn-bottom">
						<h6 class="content-title">Social Media Post</h6>
						<p class="content-text">For FB Lead Ads</p>
					</div>
				</div>
			</div>

			<div class="mt-4  mt-sm-4 mt-md-4 col-12 col-sm-6 col-md-4 col-lg-3">
				<div class="content">
					<div class="content-overlay"></div>
					<img src="{{url('frontend/images/graphics7.jpg')}}" alt="" width="100%">
					<div class="content-details fadeIn-bottom">
						<h6 class="content-title">Social Media Post</h6>
						<p class="content-text">For Fast Food</p>
					</div>
				</div>
			</div>

			<div class="mt-4 mt-md-4 mt-sm-4 mt-lg-4 col-12 col-sm-6 col-md-4 col-lg-3">
				<div class="content">
					<div class="content-overlay"></div>
					<img src="{{url('frontend/images/web4.jpg')}}" alt="" width="100%">
					<div class="content-details fadeIn-bottom">
						<h6 class="content-title">Design & Development</h6>
						<p class="content-text">For Gaming Web</p>
					</div>
				</div>
			</div>

			<form class="mb-3 text-center  mt-3 my-md-5 pt-md-5 pt-lg-0 mt-lg-4 col 12 col-md-4 col-lg-12" method="get" action="{{url('frontend/documents/portfoliozeeshan.pdf')}}">
				<Button type ="submit"class="my-md-4 my-lg-0 view btn " id="view" >View All</Button>
			</form>
		</div>		
	</div>

	 <!--About Myself Section  -->	
		<div class="about-myself " id="about-myself"><h4 class="mt-5 mb-0 text-center">About Myself</h4>
			<div id="carouselExampleCaptions" class=" carousel slide " data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				</div>

				<div class="carousel-inner" >
					<div class="carousel-item active text-center  sliderr" >
						<video autoplay muted loop id="myVideo">
							<source src="{{url('frontend/videos/slidervideo.mp4')}}" type="video/mp4">
							Your browser does not support HTML5 video.
						</video>
						<div  class="col-8 mx-col-5 col-sm-9 col-md-10 col-lg-11">
						<img  src="{{url('frontend/images/noor.png')}}" class="slider-img-pic " alt="..." height="">
					</div>

					<div class="carousel-caption carousel-text">
						<h5>Hi Guys Zeeshan Here from Pakistan</h5>
						<p class="mt-sm-2">I am currently studying my BSCS Degree from Superior University. I love to learn new things and skills and I also believe in learning more about new things every day, it fascinate me to explore and develop myself.</p>
						<form method="get" action="{{url('frontend/documents/Zeeshan.pdf')}}">
							<Button type ="submit"class="cv btn" id="cv" >Download CV</Button>
						</form>
					</div>
				</div>

				<div class="carousel-item sliderr">
						<video autoplay muted loop id="myVideo2">
							<source src="{{url('frontend/videos/carousel-video2.mp4')}}" type="video/mp4">
							Your browser does not support HTML5 video.
						</video>
						
						<div class="mt-0 carousel-caption carousel-text2">
						<h3>My Hobby</h3>
						<p>I love to play video games, watching movies & learning new things .</p>
						</div>
			    </div>
				
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>

 <!-- Freelance Section -->
	<div class="  mt-5">
		<div class="freelancer-pic ">
			<img src="{{url('frontend/images/freelance-pic.jpg')}}" alt="" width="100%" height="300px">
			<div class="  col-12 freelance">
				<div class="freelance-content col-sm-12 col-md-12   col-lg-12 ">
				<b class="text-center col-12">Have any Project in Mind?</b>
				<h5 class="text-center col-12 col-sm-12 col-md-12   col-lg-12 ">I'm Available for Freelancing</h5>
			</div> 
				<Button type ="submit"class="mx-4 mx-sm-5 mx-md-5 mx-lg-5  hire freelance-btn btn  "> <a target="blank" href="https://www.fiverr.com/zeeshan_noorr?up_rollout=true">Hire Me!</a></Button>
			</div>
		</div>
	</div>

 <!-- FLoating WhatsApp Icon-->
	<a href="https://api.whatsapp.com/send?phone=923104862197&text=Feel Free To Call." class="float" target="_blank">
		<i class="fa fa-whatsapp my-float"></i>
	</a>
</div>
@endsection
