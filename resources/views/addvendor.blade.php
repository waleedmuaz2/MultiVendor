@extends('layouts.app')
@section('title','Add New Vendor')
@section('content')
@include('layouts.header')


	<!-- /NAVIGATION -->
 <!---login start-->


 <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(css2/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Add New Vendor
					</span>
					<span class="login100-form-title-2">
							Include Some Details
						</span>
				</div>

				<form class="login100-form validate-form" action="{{url('/SubmitVendorInfo')}}" method="POST">
					            <input type="hidden" name="_token" value="{{csrf_token()}}" >


					<div class="wrap-input100 validate-input m-b-18" data-validate = "Type is required">
						<span class="label-input100">Work As</span>
						<select  class="input100"  id="country" name="workas">
								<option value="Business to Customer"selected >Business to Customer</option>
							</select>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Title is required">
							<span class="label-input100">Company Name</span>
							<input class="input100" type="text" name="ComName" placeholder="Company Name">
							<span class="focus-input100"></span>
						</div>




						<div class="wrap-input100 validate-input m-b-18" data-validate = "Type is required">
						<span class="label-input100">Main Category</span>
						<select  class="input100" id="country" name="MainCategory">
								<option value="Care Care">Care Care</option>
								<option value="Interior">Interior</option>
								<option value="Exterior">Exterior</option>
							</select>
						<span class="focus-input100"></span>
						</div>




								<div class="wrap-input100 validate-input m-b-26" data-validate="Phone No is required">
										<span class="label-input100">Phone No</span>
										<input class="input100" type="text" name="Phone" placeholder="Phone No">
										<span class="focus-input100"></span>
									</div>
									<div class="wrap-input100 validate-input m-b-26" data-validate="Adress is required">
											<span class="label-input100">Company ddress</span>
											<input class="input100" type="text" name="CompanyAddress" placeholder="Company ddress">
											<span class="focus-input100"></span>
										</div>
			<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">Co Email</span>
						<input class="input100"  type="text" readonly  name="Email" value="{{ Auth::user()->email }}">				
				<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="URL is required">
							<span class="label-input100">Co URL</span>
							<input class="input100" type="text" name="CoURL" placeholder="Company URL">
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input m-b-26" data-validate="Description is required">
								<span class="label-input100">Description</span>
								<input class="input100" type="text" name="Description" placeholder="Description">
								<span class="focus-input100"></span>
							</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							SUBMIT
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="css2/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="css2/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="css2/vendor/bootstrap/js/popper.js"></script>
	<script src="css2/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="css2/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="css2/vendor/daterangepicker/moment.min.js"></script>
	<script src="css2/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="css2/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="css2/js/main.js"></script>


 <!--- end login-->










    <!-- jQuery Plugins -->
    @include('layouts.footer')
 @endsection
