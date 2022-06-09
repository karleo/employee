<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="styelsheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" />

<style>
html {
	font-family: 'Open Sans', system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}

.phone-frame {	
	height: 697px;
	width: 345px;
}

#tabs .active {
	border-color: #0072bc;
	color: #0072bc;
	font-weight: bold
}

</style>
</head>
<body>
	<div class="flex h-screen items-center justify-center overflow-auto">
		<main class="bg-white phone-frame shadow-lg overflow-auto rounded">
			<div id="header-actions" class="bg-white flex items-center justify-between p-4 sticky top-0">
				<i class="material-icons text-gray-600"></i>
				<h1 class="font-semibold invisible text-grey-900">{{$employees->fname}} {{$employees->lname}}</h1>
				<i class="material-icons text-gray-600"></i>
			</div>
			<div id="user-header" class="bg-white flex items-center p-4">
				<img src="{{$employees->photo}}" alt="" class="h-24 mr-6 rounded-full w-24">
				<div class="flex flex-col flex-1">
					<h2 class="font-semibold mb-2 text-xl">{{$employees->fname}} {{$employees->lname}}</h2>
					 
				</div>
			</div>
		 
			<section class="border-b-8 border-gray-200 py-2">
				<div class="flex hover:bg-gray-100 items-center px-4 py-2">
					<i class="bg-gray-200 h-10 inline-block material-icons mr-4 p-2 rounded-full text-gray-600 w-10">local_phone</i><a href="tel:{{$employees->contact_no}}">{{$employees->contact_no}}</a>
				</div>
				<div class="flex hover:bg-gray-100 items-center px-4 py-2">
					<i class="bg-gray-200 h-10 inline-block material-icons mr-4 p-2 rounded-full text-gray-600 w-10">contacts</i><a href="tel:{{$employees->mobile_no}}">{{$employees->mobile_no}}</a>
				</div>
			</section>
			<section class="border-b-8 border-gray-200 py-2">
				<h3 class="font-bold font-md px-4 py-2 text-blue-700">Company</h3>
				<div class="flex hover:bg-gray-100 items-center px-4 py-2">
					<i
						class="bg-gray-200 h-10 inline-block material-icons mr-4 p-2 rounded-full text-gray-600 w-10">contact_mail</i><a href = "mailto: {{$employees->email_add}}">{{$employees->email_add}}</a>
				</div>
				<div class="flex hover:bg-gray-100 items-center px-4 py-2">
					<i class="bg-gray-200 h-10 inline-block material-icons mr-4 p-2 rounded-full text-gray-600 w-10">business</i>{{$employees->company}}
				</div>
				<div class="flex hover:bg-gray-100 items-center px-4 py-2">
					<i class="bg-gray-200 h-10 inline-block material-icons mr-4 p-2 rounded-full text-gray-600 w-10">location_on</i>{{$employees->company_add}}
				</div>
				<div class="flex hover:bg-gray-100 items-center px-4 py-2">
					<i class="bg-gray-200 h-10 inline-block material-icons mr-4 p-2 rounded-full text-gray-600 w-10">web</i>{{$employees->website}}
				</div>
			</section>
			 <section class="py-2">
				<div class="flex hover:bg-gray-100 items-center px-4 py-2"> 
					<a  class="btn btn-warning btn-sm" href="{{ route('dvcard', [ $employees->emp_no ]) }}">	<i class="bg-gray-200 h-10 inline-block material-icons mr-4 p-2 rounded-full text-gray-600 w-10">file_download</i> Download	</a>
			 </section>
			{{-- <section class="py-2">
				<h3 class="font-bold font-md px-4 py-2 text-blue-700">Other</h3>
				<div class="flex hover:bg-gray-100 items-center px-4 py-2">
					<i
						class="bg-gray-200 h-10 inline-block material-icons mr-4 p-2 rounded-full text-gray-600 w-10">delete</i>Deactivate
					Profile
				</div>
			</section> --}}
		</main>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
</body>
</html>
