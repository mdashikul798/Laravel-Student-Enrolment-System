@extends("include.side")

@section("mainContain")
	<h4 class="bg-success">{{ Session::get("msg") }}</h4>
	@include("pages.errors")


	<div class="container">
		<h1>Add Student</h1>
		<form method="POST" action="{{ url('/saveStudent')}}" enctype="multipart/form-data">
			{{ csrf_field() }}
		  <div class="form-group">
		    <label for="email">Student Name:</label>
		    <input type="text" class="form-control" id="email" name="name">
		  </div>

		  <div class="form-group">
		    <label for="email">Student Roll:</label>
		    <input type="text" class="form-control" id="email" name="roll">
		  </div>

		  <div class="form-group">
		    <label for="email">Father Name:</label>
		    <input type="text" class="form-control" id="email" name="father_name">
		  </div>

		  <div class="form-group">
		    <label for="email">Mother Name:</label>
		    <input type="text" class="form-control" id="email" name="mother_name">
		  </div>

		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email" name="email">
		  </div>

		  <div class="form-group">
		    <label for="email">Student Phone:</label>
		    <input type="text" class="form-control" id="email" name="phone">
		  </div>

		  <div class="form-group">
		    <label for="email">Student Image:</label>
		    <input type="file" class="form-control" id="email" name="image">
		  </div>

		  <div class="form-group">
		    <label for="pwd">Department:</label>
		    <select class="form-control" name="department">
		    	<option value=" ">Select Department</option>
		    	<option value="1">Accounting</option>
		    	<option value="2">Computer Science</option>
		    	<option value="3">Mathematic</option>>
		    </select>
		  </div>

		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" id="pwd" name="password">
		  </div>

		  <div class="checkbox">
		    <label><input type="checkbox"> Remember me</label>
		  </div>
		  <button type="submit" class="btn btn-success">Submit</button>
		</form>
		<div class="checkbox">
		   <label>Back to the <a href="{{ url('home') }}">Dashboark..</a></label>
		 </div>
		
	</div>
@endsection