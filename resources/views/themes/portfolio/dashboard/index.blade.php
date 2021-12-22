@extends('theme::layouts.app')

@section('content')
<style>
	.border-tags{
		align-self: left;
		margin-right: 20px;
		padding-left: 20px;
		padding-right: 20px;
		/* height: 50px; */
		width: auto;
	}
	.label_black{
		margin-top: 10px;
		width: 300px;
		border: 1px dashed black;
		padding: 5px;
		border-radius: 20px;
	}
	.tag{
		padding:5px;
		float:left;
	}
</style>
<div class="touch-toast-container">
	@if(Session::get('success'))
	<div class="alert alert-success">
	  {{Session::get('success')}}
	</div>
	  @endif

	@if(Session::get('fail'))
	<div class="alert alert-danger">
	  {{Session::get('fail')}}
	</div>
	@endif
  {{-- @include('voyager::alerts')
@include('theme::partials.toast')
    @if(session('message'))
        <script>setTimeout(function(){ popToast("{{ session('message_type') }}", "{{ session('message') }}"); }, 10);</script>
    @endif --}}
</div>
<div class="popToast" id="popToast"></div>
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
	            
			<form action="{{route('wave.mediastore')}}" method="POST" >
				@csrf
			<center>
				<div class="name" style="height:50px; width:auto;">
					<h4>Insert Your Media Files Here::</h4>
				</div>
				<x-media-library-attachment name="media" onchange="lazyload()" rules="mimes:png,jpeg,pdf|max:15360" required/>

				{{-- @dump(session()->all()) --}}
				{{-- <x-media-library-attachment multiple name="media" max-items="10"  rules="mimes:png,jpg,jpeg,pdf|max:15360" required>
				</x-media-library-attachment> --}}
				<div class="tech" for="tags" style="overflow-x:hide; width:500px; height:80px; z-index:100; ">
					<div class="second" style="height: 50px; width:auto; z-index:10; margin-left:10px;float:left;">
						<div class="tag"><input type="checkbox" class="border-tags" value="Tag1" placeholder="Tag1" name='tag[]'>Tag1</div>
						<div class="tag"><input type="checkbox" class="border-tags" value="Tag2" placeholder="Tag2" name='tag[]'>Tag2</div>
						<div class="tag"><input type="checkbox" class="border-tags" value="Tag3" placeholder="Tag3" name='tag[]'>Tag3</div>
						<div class="tag"><input type="checkbox" class="border-tags" value="Tag4" placeholder="Tag4" name='tag[]'>Tag4</div>
						<div class="tag"><input type="checkbox" class="border-tags" value="Tag5" placeholder="Tag5" name='tag[]'>Tag5</div>
						<div class="tag"><input type="checkbox" class="border-tags" value="Tag6" placeholder="Tag6" name='tag[]'>Tag6</div>
						<div class="tag"><input type="checkbox" class="border-tags" value="Tag7" placeholder="Tag7" name='tag[]'>Tag7</div>
				</div>
			</div>
			<center>
			<div class="label_black">
				<strong><label for="custom">Custom_tag_1</label><br>
				<input type="text" name='tag[]' placeholder="Only One Tag Creates" style="padding:5px; border:1px solid black; align:center; border-radius:20px;">
			</strong>
			</div>
			</center>
			</center>
			{{-- <x-media-library-collection name="avatar" /> --}}
			<center>	
				<div class="container-custom">
					<button type="submit" class="btn btn-pills btn-primary">Submit</button>
				</div>
			</center>
			</form>
		</div> 
	<script type="text/javascript">
		window.onload = function(){
			$("img").lazyload({
        duration : 2000,
	    effect : "fadeIn"
	});
		}
	</script>
@endsection
