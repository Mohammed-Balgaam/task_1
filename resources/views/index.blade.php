@extends('layouts.main')


@section('content')

<section id="center" class="center_h">
 <div class="center_m">
  <div class="container-fluid">
   <div class="row center_1 px-3">
    <div class="col-md-7">
	 <div class="center_1l">
	  <h2 class="col_oran">LOOKING TO EXPLORE</h2>
	  <h1 class="text-white mt-3">YOUR KNOWLEDGE</h1>
	  <p class="mt-3 mb-4 text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis fermentum metus. Fusce nec eleifend urna. Sed id placerat erat. Aenean congue, metus sit amet sagittis tincidunt, augue odio vulputate meg ipsum dolor sit amet, consectetur ad.</p>
	  <ul class="mb-0">
	   <li class="d-inline-block"><a class="button" href="#">VIEW COURSES <i class="fa fa-play-circle ms-1"></i></a></li>
	   <li class="d-inline-block ms-3"><a class="button_1" href="#">APPLY NOW <i class="fa fa-thumbs-o-up ms-1"></i></a></li>
	  </ul>
	 </div>
	</div>
	<div class="col-md-5">
	 <div class="center_1r">
	   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
				  </figure>
			  </div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="course" class="p_3 bg-light">
 <div class="container-xl">
   <div class="row feature_1 text-center mb-4">
    <div class="col-md-12">
	   <h4 class="col_green">TOP COURSES</h4>

	   @if(session('success'))
	   <div>
		<div class="alert alert-success">
		{{session('success')}}
		</div>
	   </div>
	   @endif

	   <a class='button' href="/addCourse">Add New Course</a>

	   <h1 class="mb-0"><span class="col_oran fw-normal">Featured</span> Online Courses</h1>
	</div>
   </div>
   <div class="course_1 row">
    @foreach($course as $course)
	<div class="col-md-4">
	 <div class="course_1i p-3 rounded-3 border_1 bg-white">
	   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="{{asset('storage/' . $course->image_url)}}" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
	   <h4 class="mt-3"><a href="#">{{$course->name}}</a></h4>
	   <ul class="mt-2 font_14">
	    <li class="d-inline-block"><i class="fa fa-user me-1 col_green"></i>{{$course->created_at}}</li>
		<br>
		<br>
		<li class="d-inline-block">{{$course->desc}}</li>
		<br>
		<br>
		<li class="d-inline-block"><i class="fa fa-usd me-1 col_green"></i>{{$course->price}}</li>

	   </ul>
	   <a href="{{route('update.course' , ['id' => $course->id])}}" class="btn btn-primary">Update</a>
	   <!-- <a href="{{route('destroy.course' , ['id' => $course->id])}}" class="btn btn-danger">Delete</a> -->


	   <form action="{{ url('courses/' . $course->id) }}" method="POST" style="display:inline;">
	        @csrf
			@method('DELETE')
			<button type="submit" class="btn btn-danger">Delete</button>
		</form>




	   <hr>
	   <h6 class="mb-0 fw-bold col_oran"> 
	       <span>
		    <i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-o"></i>
		   </span>
	       (4.8/5.00)
	 </div>
	</div>
    @endforeach
   </div>
  </div>
</section>

 </div>
</div>


@endsection