@extends('layouts.app')

@section('title', 'Get Started')

@section('content')
<div id="wrap">

    <div class="container">


      <h1>How to get started</h1>
 <hr>
      <br>

        <h2>Step 1:</h2>

	        <div class="center-verify-icons">
	        	<i class="fa fa-user-plus verify-icons" aria-hidden="true"></i>
	        </div>

	        <h3>Sign up</h3>
        	<p>    
	        	Creating an account with <span class="notranslate">Altru</span> will give you access to your profile, which you can personalise with a photo of yourself and some information about you or your family. 
	        </p>
	        <p>
	        	If you have a spare room, or any place that a guest can stay, you can sign up as a Volunteer. 
	        </p>
	        <p>
	        	If you are looking for somewhere to stay for a while, sign up as a Guest.
	        </p>
	        <p>
	        	You won't be able to access all features until your account recieves Verified status. To find out how you can verify your account, please see Step 2.
	        </p>
	        <p><a href="{{ url('register/usertype') }}" class="btn btn-link">Click here to sign up</a></p>

<hr>

		<h2>Step 2:</h2>

	        <div class="center-verify-icons">
	        	<i class="fa fa-file-text-o verify-icons light" aria-hidden="true"></i>
	        </div>
        
	        <h3>Complete the required documents to verify your account</h3>
	        <p>
	            At Altru, the safety and well-being of our clients is one of our greatest concerns. We ensure that everyone is verified by our team or another organisation before being able to connect with others on the Altru website. 
	        </p>
	        <p>
	        	You can request the required documents to be posted to your home address by <a href="{{ url('contact') }}">contacting us</a>, or if you prefer, you can make an appointment to visit one of our offices and one of our team members will be available to help you complete the forms.
	        </p>
	        <p><a href="{{ url('contact') }}" class="btn btn-link">Click here to contact us</a></p>

<hr>

		<h2>Step 3:</h2>

	        <div class="center-verify-icons">
	        	<!-- <i class="fa fa-users verify-icons" aria-hidden="true"></i> -->
	        	<i class="fa fa-home verify-icons" aria-hidden="true"></i>
	        </div>
        
	        <h3>Connect with others</h3>
	        <p>
	            After you have completed the documentation and your account has been verified, you will have full access to the services that we provide. 
	        </p>
	        <p>
	        	You will be able to view a list of people in your area who are looking to help/offering assistance. 
	        </p>
	        <p>
	        	To connect with someone simply contact them via their email or phone number. In the near future we plan to upgrade our systems in order to allow people to contact eachother within the website via private message.
	        </p>
	      


<hr>

    </div>

</div>
@endsection

