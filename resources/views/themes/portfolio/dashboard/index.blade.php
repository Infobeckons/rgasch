@extends('theme::layouts.app')

@section('content')
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
	<div class="flex flex-col px-10 mx-auto my-6 lg:flex-row max-w-7xl xl:px-5">
	    <div class="flex flex-col justify-start flex-1 mb-5 overflow-hidden bg-white border  style="padding-left:30px;"rounded-lg lg:mr-3 lg:mb-0 border- style="padding-left:30px;"gray-150">
	        <div class="flex flex-wrap items-center justify-between p-5 bg-white border- style="padding-left:30px;"b border- style="padding-left:30px;"gray-150 sm:flex-no-wrap">
				<div class="flex items-center justify-center w-12 h-12 mr-5 rounded-lg bg-wave-100">
					<svg class="w-6 h-6 text-wave-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
				</div>
				<div class="relative flex-1">
	                <h3 class="text-lg font-medium leading-6 text-gray-700">
	                    Welcome to your Dashboard
	                </h3>
	                <p class="text-sm leading-5 text-gray-500 mt">
	                    Learn More Below
	                </p>
				</div>

	       </div>
		   
	        <div class="relative p-5">
	            
			<form method="POST" action="{{route('wave.mediastore')}}">
				@csrf
			<center>
				<div class="name" style="height:50px; width:auto; ">
					<label>Name</label>
					<br>
					<input type="text" name="name" placeholder="Name" style="border:1px solid black;"> 
				</div>
				<x-media-library-attachment name="avatar" />
				<input type="text" name="name"> 
				{{-- <x-media-library-attachment multiple name="media" max-items="10"  rules="mimes:png,jpg,jpeg,pdf|max:15360" required>
				</x-media-library-attachment> --}}
				<div class="tech" for="tags" style="overflow-x:scroll; width:500px; height:50px; z-index:100; overflow-y:hidden;">
					<div class="second" style="height: 50px; width:auto; z-index:10" >
						<input type="button" class="border" style="padding:5px 30px 5px 30px;"  value="Tag1">
						<input type="button" class="border" style="padding:5px 30px 5px 30px;"  value="Tag2">
						<input type="button" class="border" style="padding:5px 30px 5px 30px;"  value="Tag3">
						<input type="button" class="border" style="padding:5px 30px 5px 30px;"  value="Tag4">
						<input type="button" class="border" style="padding:5px 30px 5px 30px;"  value="Tag5">
						<input type="button" class="border" style="padding:5px 30px 5px 30px;"  value="Tag6">
						<input type="button" class="border" style="padding:5px 30px 5px 30px;"  value="Tag7">
				</div>
			</div>
			</center>
			{{-- <x-media-library-collection name="avatar" /> --}}
			<center>	
				<div class="container-custom">
					<button type="submit" class="btn btn-pills btn-primary">Submit</button>
				</div>
			</center>
			</form>
		</div> 
	
@endsection
