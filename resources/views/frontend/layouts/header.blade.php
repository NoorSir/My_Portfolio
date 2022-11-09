<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="Zeeshan noor, noor, zeeshan portfolio, noor portfolio, zeeshannoor, zeeshannoor," />
<meta name="description" content="Hy Guys Zeeshan here from Pakistan. I am currently studying my BSCS Degree from Superior University. I love to learn new things and skills and I also believe in learning more about new things every day, it fascinate me to explore and develop myself." />  

<title>Zeeshan Noor</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

<!-- link for font-awosome use in Service section -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<!-- link for font-Awosome use in  WhatsApp icon -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- favicon -->
<link rel="apple-touch-icon" sizes="152x152" href="{{url('frontend/images/152.png')}}">
<link rel="icon" type="image/png" sizes="32x32"  href="{{url('frontend/images/32.png')}}">
<link rel="icon" type="image/png" sizes="16x16"  href="{{url('frontend/images/16.png')}}">
<link rel="manifest"  href="{{url('frontend/images/site.webmanifest')}}">
<link rel="mask-icon" href="{{url('frontend/images/150.png')}}">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="{{ secure_asset('css/AdminLTE.min.css') }}">
<link rel="stylesheet" href="{{url('frontend/css/index.css')}}">
@production
    <link rel="stylesheet" href="{{ secure_asset('css/AdminLTE.min.css') }}">
@endproduction
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(){
		
		el_autohide = document.querySelector('.autohide');
		
		// add padding-top to bady (if necessary)
		navbar_height = document.querySelector('.navbar').offsetHeight;
		document.body.style.paddingTop = navbar_height + 'px';

		if(el_autohide){
			
			var last_scroll_top = 0;
			window.addEventListener('scroll', function() {
	       		let scroll_top = window.scrollY;
		       if(scroll_top < last_scroll_top) {
		            el_autohide.classList.remove('scrolled-down');
		            el_autohide.classList.add('scrolled-up');
		        }
		        else {
		            el_autohide.classList.remove('scrolled-up');
		            el_autohide.classList.add('scrolled-down');
		        }
		        last_scroll_top = scroll_top;
			}); 
			// window.addEventListener
		}
	}); 
	// DOMContentLoaded  end
</script>
</head>
<body style="background-color:black">

		<!-- ============= COMPONENT ============== -->
	<nav class="autohide navbar navbar-expand-md navbar-dark">
	<div class="container-fluid" >
		<div class="animbrand">
		<a class="navbar-brand animate" href="{{url('/')}}">Noor</a>
		</div>
	<button class="navbar-toggler" style="box-shadow:unset" type="button" data-bs-toggle="collapse"  data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
	<div class="collapse navbar-collapse justify-content-end" id="main_nav">

		<ul class="navbar-nav mx-auto">
			<li class="nav-item active dropdown" ><a class="nav-link " data-toggle="dropdown" href="{{url('/')}}"> Home</a></li>
			<li onclick="getId()" class="nav-item dropdown"><a class="nav-link" id="about" data-bs-toggle="collapse" href="#about-myself" data-bs-target="#main_nav"> About Me </a></li>
			<li class="nav-item"><a id="skills" class="nav-link" href="#myskills" data-bs-toggle="collapse" data-bs-target="#main_nav" > My Skills </a></li>
			<li class="nav-item"><a id="contact" class="nav-link" href="#contact-form" data-bs-toggle="collapse" data-bs-target="#main_nav" > Contact </a></li>
		</ul>

	</div> <!-- navbar-collapse.// -->
	</div> <!-- container-fluid.// -->
	</nav>
	<!-- ============= COMPONENT END// ============== -->

</body>
</html>

<!-- Script for navbar links location because we use data-bs-toggle="collapse & data-bs-target="#main_nav" -->
<script>
document.getElementById("about").onclick=function(){
	location.href="#about-myself";
};

document.getElementById("skills").onclick = function () {
    location.href = "#myskills";
};

document.getElementById("contact").onclick = function () {
    location.href = "#contact-form";
};

</script>