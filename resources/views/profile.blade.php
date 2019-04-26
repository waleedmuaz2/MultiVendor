@extends('layouts.app')
@section('title','Profile')
@section('content')
@include('layouts.header')
	<!-- /NAVIGATION -->
		<!-- /BREADCRUMB -->
		<div class="section-title">
				<h3 class="title">Profile</h3>
			</div>
		
<div class="container-fluid">
  
		<div class="row">
		  <div class="col-sm-4" style="background-color:white;"><p><strong> Name</strong><br><br>Asad Ali</p><br>
			<div class="row">
					<div class="col-sm-6" style="background-color:white;"><p><strong>Gender</strong><br><br>
						male</p></div>
				  <div class="col-sm-6" style="background-color:white;"><p><strong>Birthday</strong><br><br>
						Please enter your birthday</p></div>
			</div>
			
		  </div>
		  <div class="col-sm-4" style="background-color:white;"><p><strong>Email Address</strong> | <a href="#"> Change</a><br><br>
			asadzulfiqar28@gmail.com</p></div>
			  <div class="col-sm-4" style="background-color:white;"><P><strong>Mobile</strong> | <a href="#">Change</a><br><br>
					+92 3244461309</P></div>
					<div class="row">
						<div class="col-sm-12" style="background-color:white;"><a href="#fakeLink" class="btn">  &nbsp &nbsp&nbsp Edit Profile
								&nbsp&nbsp&nbsp&nbsp
						</a></div>
						<div class="col-sm-12" style="background-color:white;"><a href="#fakeLink" class="btn">Change Password</a></div>
					  </div>
		</div>
	  </div>
		  

@include('layouts.footer')
@endsection