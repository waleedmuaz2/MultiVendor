
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
						Selected Category
					</span>
					<span class="login100-form-title-2">
							Include Some Details
						</span>
				</div>

				<form class="login100-form validate-form">
					

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Type is required">
						<span class="label-input100">Type</span>
						<select  class="input100" id="country" name="type" placeholder="Type">
								<option value="australia">Type</option>
								<option value="canada">Canada</option>
								<option value="usa">USA</option>
							</select>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Title is required">
							<span class="label-input100">Title</span>
							<input class="input100" type="text" name="Title" placeholder="Title">
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input m-b-26" data-validate="set-price is required">
								<span class="label-input100">Set Price</span>
								<input class="input100" type="text" name="Set Price" placeholder="Set Price">
								<span class="focus-input100"></span>
							</div>
							<div class="wrap-input100 validate-input m-b-26" data-validate="Company Name is required">
									<span class="label-input100">Co Name</span>
									<input class="input100" type="text" name="Company Name" placeholder="Company Name">
									<span class="focus-input100"></span>
								</div>
								<div class="wrap-input100 validate-input m-b-26" data-validate="Phone No is required">
										<span class="label-input100">Phone No</span>
										<input class="input100" type="text" name="Phone No" placeholder="Phone No">
										<span class="focus-input100"></span>
									</div>
									<div class="wrap-input100 validate-input m-b-26" data-validate="Adress is required">
											<span class="label-input100">Co Adress</span>
											<input class="input100" type="text" name="Company Adress" placeholder="Company Adress">
											<span class="focus-input100"></span>
										</div>
			<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">Co Email</span>
						<input class="input100" type="text" name="Email" placeholder="Company Email">
				<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="URL is required">
							<span class="label-input100">Co URL</span>
							<input class="input100" type="text" name="URL" placeholder="Company URL">
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input m-b-26" data-validate="Description is required">
								<span class="label-input100">Description</span>
								<input class="input100" type="text" name="Description" placeholder="Description">
								<span class="focus-input100"></span>
							</div>
						


					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

					
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
