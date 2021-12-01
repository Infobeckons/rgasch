@extends('theme::layouts.app')

@section('content')

<link rel="stylesheet" href="{{asset('themes/portfolio/neo/css/style.css')}}">

	<div class="flex flex-col px-10 mx-auto my-6 lg:flex-row max-w-7xl xl:px-5">
	    <div class="flex flex-col justify-start flex-1 mb-5 overflow-hidden bg-white border rounded-lg lg:mr-3 lg:mb-0 border-gray-150">
	        <div class="flex flex-wrap items-center justify-between p-5 bg-white border-b border-gray-150 sm:flex-no-wrap">
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
		   
	        {{-- <div class="relative p-5">
	            <p class="text-base leading-loose text-gray-500">This is your application <a href="{{ route('wave.dashboard') }}" class="underline text-wave-500">dashboard</a>, you can customize this view inside of <code class="px-2 py-1 font-mono text-base font-medium text-gray-600 bg-gray-100 rounded-md">{{ theme_folder('/dashboard/index.blade.php') }}</code><br><br> (Themes are located inside the <code>resources/views/themes</code> folder)</p>
				<span class="inline-flex mt-5 rounded-md shadow-sm">
	                <a href="{{ url('docs') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50">
	                    Read The Docs
	                </a>
				</span>
			</div> --}}
			<form method="POST" action="{{route('wave.imageinsert')}}">
				@csrf
			
				{{-- <input id="name" name="name"> --}}
			
				{{-- <x-media-library-uploader name="media" rules="mimes:png,jpeg"/> --}}
				<div class="media-library-uploader">
					<div accept="image/png,image/jpeg,application/pdf" for="img" class="media-library-add">
						<img class="add" src="{{asset('themes/portfolio/neo/images/plus.png')}}" accept="image/png,image/jpeg,application/pdf" for="img" />
						<button type="button" class="media-library-dropzone media-library-dropzone-add">
						
							<input type="file" accept="image/png,image/jpeg,application/pdf" id="img" dusk="main-uploader" class="media-library-hidden"/>
							 <div class="media-library-placeholder">
								 <span class="media-library-button media-library-button-info">
									<div class="media-library-help">
										
										<span>Select or drag max 1 file | PNG, JPEG, PDF | &lt; 1024KB</span>
									</div>
									</span> 
									<!---->
								</div> 
								{{-- <div class="media-library-help">
									<span>Select or drag max 1 file | PNG, JPEG, PDF | &lt; 1024KB</span>
								</div> --}}
							</button>
						</div>
					</div>
				
					<center>
				<button type="submit" class="btn btn-pills btn-primary">Submit</button>
			</center>
			</form>

			<form action="{{ route('wave.imageinsert') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="relative flex flex-col px-10 py-8 lg:flex-row">
				
				
			
				{{ csrf_field() }}
			
			
			
			</form>
			
			<div id="upload-modal" x-data="{ open: false }" x-init="$watch('open', value => {
				  if (value === true) { document.body.classList.add('overflow-hidden') }
				  else { document.body.classList.remove('overflow-hidden'); clearInputField(); }
				});" x-show="open" class="fixed inset-0 z-10 z-30 overflow-y-auto">
				<div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
					<div x-show="open" @click="open = false;" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity" x-cloak>
						<div class="absolute inset-0 bg-black opacity-50"></div>
					</div>
			
					<!-- This element is to trick the browser into centering the modal contents. -->
					<span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;
					<div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6" role="dialog" aria-modal="true" aria-labelledby="modal-headline" x-cloak>
						<div>
							<div class="mt-3 text-center sm:mt-5">
								<h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-headline">
									Position and resize your photo
								</h3>
								<div class="mt-2">
									<div id="upload-crop-container" class="relative flex items-center justify-center h-56 mt-5">
										<div id="uploadLoading" class="flex items-center justify-center w-full h-full">
											<svg class="w-5 h-5 mr-3 -ml-1 text-gray-400 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
												<circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
												<path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
											</svg>
										</div>
										<div id="upload-crop"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="mt-5 sm:mt-6">
							<span class="flex w-full rounded-md shadow-sm">
								<button @click="open = false;" class="inline-flex justify-center w-full px-4 py-2 mr-2 text-base font-medium leading-6 text-gray-700 transition duration-150 ease-in-out bg-white border border-transparent border-gray-300 rounded-md shadow-sm hover:text-gray-500 active:text-gray-800 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5" type="button">Cancel</button>
								<button @click="open = false; window.applyImageCrop()" class="inline-flex justify-center w-full px-4 py-2 ml-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out border border-transparent rounded-md shadow-sm bg-wave-600 hover:bg-wave-500 focus:outline-none focus:border-wave-700 focus:shadow-outline-wave sm:text-sm sm:leading-5" id="apply-crop" type="button">Apply</button>
							</span>
						</div>
					</div>
			
		
	
	         


@endsection
