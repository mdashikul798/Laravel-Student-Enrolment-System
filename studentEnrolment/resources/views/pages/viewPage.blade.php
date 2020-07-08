@extends("include.side")

@section("mainContain")
<div class="container">

	<h2>Student Details</h2>
	<li>Student Image</li>
	

	<table class="table">
	    <thead>
	      <tr>
	        <th>Student Name</th>
	        <th>Student Roll</th>
	        <th>Department</th>
	        <th>Student Phone</th>
	        <th>Student Email</th>
	        <th>Father Name</th>
	        <th>Mother Name</th>
	      </tr>
	    </thead>
	    <tbody>
	    	@foreach($student_info as $data)
	    	<img src ="{{ asset($data->image) }}" width="300"/>
	      <tr>
	        <td>{{ $data->name }}</td>
	        <td>{{ $data->roll }}</td>
	        <td>
	        	@if($data->department==1)
	        		Accounting
	        	@elseif($data->department==2) 
	        		Computer Science
	        	@elseif($data->department==3)
	        		Mathematic
	        	@endif
	        </td>
	        <td>{{ $data->phone }}</td>
	        <td>{{ $data->email }}</td>
	        <td>{{ $data->father_name }}</td>
	        <td>{{ $data->mother_name }}</td>
	      </tr>
	      @endforeach
	    </tbody>

	  </table>
</div>
@endsection