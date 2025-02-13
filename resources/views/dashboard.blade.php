<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Educto</title>
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" >
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" >
	<link href="{{asset('css/global.css')}}" rel="stylesheet">
	<link href="{{asset('css/index.css')}}" rel="stylesheet">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Rubik&display=swap')}}" rel="stylesheet">
	<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>

<section id="header">
<nav class="navbar navbar-expand-md navbar-light bg-white mx-auto pt-3 pb-3 shadow_box px-3" id="navbar_sticky">
  <div class="container-fluid">
    <a class="navbar-brand p-0  fw-bold me-5 text-uppercase" href="index.html"><i class="fa fa-book col_oran align-middle"></i> Educ<span class="col_green">to</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	   <ul class="navbar-nav mb-0">
	    
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
		 
		<li class="nav-item">
          <a class="nav-link" href="about.html">About </a>
        </li>

		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Blog
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="blog.html"><i class="fa fa-chevron-right font_8 me-1 align-middle"></i> Blog</a></li>
            <li><a class="dropdown-item border-0" href="blog_detail.html"><i class="fa fa-chevron-right font_8 me-1 align-middle"></i> Blog Detail</a></li>
          </ul>
        </li>
		
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Courses
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="course.html"><i class="fa fa-chevron-right font_8 me-1 align-middle"></i> Courses</a></li>
            <li><a class="dropdown-item border-0" href="detail.html"><i class="fa fa-chevron-right font_8 me-1 align-middle"></i> Course Detail</a></li>
          </ul>
        </li>
		
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pages
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="event.html"><i class="fa fa-chevron-right font_8 me-1 align-middle"></i> Events</a></li>
            <li><a class="dropdown-item border-0" href="team.html"><i class="fa fa-chevron-right font_8 me-1 align-middle"></i> Techers</a></li>
          </ul>
        </li>
		
		<li class="nav-item">
          <a class="nav-link" href="contact.html">Contact </a>
        </li>

      </ul>
       <ul class="navbar-nav mb-0 ms-auto">
		
		<li class="nav-item dropdown mx-2">
          <div class="input-group px-3 pt-2 pb-2 radius_30 border_1 bg-light">
				<input type="text" class="form-control border-0 bg-transparent" placeholder="Search Courses">
				<span class="input-group-btn">
					<button class="btn btn-primary bg_blue border_1 rounded-circle" type="button">
						<i class="fa fa-search"></i> </button>
				</span>
		</div>
        </li>
		
		<li class="nav-item">
        </li>
      </ul>
    </div>
  </div>
</nav>
</section>

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

                  <form action="/courses/store" method="POST">
                        @csrf <!-- حماية ضد CSRF في لارافيل -->

                        <!-- اسم الكورس -->
                        <div class="mb-3">
                            <label for="course_name" class="form-label">اسم الكورس</label>
                            <input type="text" class="form-control" id="course_name" name="name" placeholder="أدخل اسم الكورس" required>
                        </div>

                        <!-- مدة الكورس -->
                        <div class="mb-3">
                            <label for="course_duration" class="form-label">مدة الكورس (بالأسابيع)</label>
                            <input type="number" class="form-control" id="course_duration" name="duration" placeholder="أدخل مدة الكورس" required>
                        </div>

                        <!-- مجال الكورس -->
                        <div class="mb-3">
                            <label for="course_field" class="form-label">مجال الكورس</label>
                            <input type="text" class="form-control" id="course_field" name="field" placeholder="أدخل مجال الكورس" required>
                        </div>

                        <!-- زر الإرسال -->
                        <button type="submit" class="btn btn-primary w-100">إضافة الكورس</button>
                    </form>


					<!-- <a href="#"><img src="img/2.jpg" class="w-100" alt="abc"></a> -->
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
	   <h1 class="mb-0"><span class="col_oran fw-normal">Featured</span> Online Courses</h1>
	</div>
   </div>
   <div class="course_1 row">
    @foreach($course as $course)
	<div class="col-md-4">
	 <div class="course_1i p-3 rounded-3 border_1 bg-white">
	   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/111.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
	   <h4 class="mt-3"><a href="#">{{$course->name}}</a></h4>
	   <ul class="mt-2 font_14">
	    <li class="d-inline-block"><i class="fa fa-user me-1 col_green"></i>{{$course->created_at}}</li>
	   </ul>
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

<script>
window.onscroll = function() {myFunction()};
var navbar_sticky = document.getElementById("navbar_sticky");
var sticky = navbar_sticky.offsetTop;
var navbar_height = document.querySelector('.navbar').offsetHeight;
function myFunction() {
  if (window.pageYOffset >= sticky + navbar_height) {
    navbar_sticky.classList.add("sticky")
	document.body.style.paddingTop = navbar_height + 'px';
  } else {
    navbar_sticky.classList.remove("sticky");
	document.body.style.paddingTop = '0'
  }
}
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>