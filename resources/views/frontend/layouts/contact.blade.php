<div class="container-fluid pt-3 contact">
			<div class="container-fluid">
				<h4 class="text-center pb-2" id="contact-form">Contact</h4>
				<div class="row mx-sm-3">
					<div class="col-12 col-md-5 col-lg-6 ">
						<div class="col-12 col-lg-6 row">	
							<div class="col-1 col-md-1 col-lg-1 ">
								<i class="fa-sharp fa-solid fa-location-dot "style="color:white"></i>
							</div>
							<div class="col-11 col-md-4 col-lg-5 ">
								<h5>Location</h5>
								<p class="">Lahore,Pakistan</p>
							</div>		
						</div>

						<div class="col-12 col-md-5 col-lg-6 row">
							
							<div class="col-1 col-md-1 col-lg-1">
								<i class="fa-sharp fa-solid fa-envelope " style="color:white"></i>
							</div>
							<div class="col-11 col-md-4 col-lg-5">
								<h5>Email</h5>
								<p class="">Zeeshannoorofficial@gmail.com</p>
							</div>
						</div>

						<div class="col-12 col-md-5 col-lg-6 row">
							<div class="col-1 col-md-1 col-lg-1">
								<i class="fa-sharp fa-solid fa-phone"style="color:white"></i>
							</div>
							<div class="col-11 col-md-4 col-lg-5">
								<h5>Call</h5>
								<p class="">+92&nbsp3104862197</p>
							</div>
						</div>
				</div>
					
					<div class=" col-12 col-sm-10 mx-sm-auto col-md-7  col-lg-6 form-div mb-2">
					 
								<!-- @if(Session::has('success'))
									<div class="alert alert-success">
										{{Session::get('success')}}
									</div>
								@endif -->
                                @if(Session::has('success'))
                                    <script type="text/javascript">
										function massge() {
											Swal.fire(
														'Request Submitted!',
														'We will contact you shortly!',
														'success'
													);
											}
											window.onload = massge;
                                   </script>
                                @endif

						<form  method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
							@csrf
                            @if ($errors->count()>0)
                                <div class="w-4/8  text-center  alert alert-danger" id="ERROR_COPY" style="display:none">
                                @foreach($errors->all() as $error)       
                                    <b>{{$error}}</b>  </br>      
                                @endforeach
                                </div>
                             @endif
							<div class="row">
								<div class="col-12 col-lg-6">
									<label for="">Name</label>
									<input type="text" name="name" id="name" class="form-control mt-1" placeholder="Enter your Name.." value="{{old('name')}}">
								</div>

								<div class="col-12 col-lg-6">
									<label for="">Email</label>
									<input type="email" name="email" id="email" class="form-control mt-1 " placeholder="Enter your Email.." value="{{old('email')}}">
								</div>
						
							</div>

							<div class="row">
								<div class="col-12 col-lg-12">
									<label for="">Message</label>
									<textarea name="msg" id="" cols="30" rows="3" class="form-control mt-1" placeholder="Please Enter Your message">{{old('msg')}}</textarea>
								</div>	
							</div>

							<div class="mt-2 mb-2 ">
								<button class="btn cv  col-12" type="submit">  Send &nbsp<i class="fa-sharp fa-solid fa-paper-plane"></i></button>
							</div>

						</form>
					</div>
				</div>
		</div>
	</div>
</div>


    <!-- Sweet Alert2 -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    var has_errors = document.querySelector('#ERROR_COPY');
    if(has_errors!==null){
   
   swal.fire({
      title:'Error',
      type:'error',
      icon: 'warning',
      html:jQuery("#ERROR_COPY").html(),
      showCloseButton:true,
   })
   }
    </script>