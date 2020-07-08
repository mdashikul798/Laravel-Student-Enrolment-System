@extends("include.side")

@section("mainContain")
	<div class="container">
	  <h2>Information of Student</h2>
	  <p>Student showen from  database :</p>            
	  <table class="table">
	    <thead>
	      <tr>
	        <th>Student Name</th>
	        <th>Student Roll</th>
	        <th>Phone Number</th>
	        <th>Department</th>
	        <th>Student Email</th>
	        <th>Action</th>
	      </tr>
	    </thead>
	    <tbody>
	    	@foreach($allStudent as $data)
	      <tr>
	        <td>{{ $data->name }}</td>
	        <td>{{ $data->roll }}</td>
	        <td>{{ $data->phone }}</td>
	        <td>
	        	@if($data->department==1)
	        		Accounting
	        	@elseif($data->department==2) 
	        		Computer Science
	        	@elseif($data->department==3)
	        		Mathematic
	        	@endif
	        </td>
	        <td>{{ $data->email }}</td>
	        <td><a href="{{ url('/view-student/'.$data->id) }}">View</a> | 
	        	<a href="{{ url('/edit-student/'. $data->id) }}">Edit</a> | 
	        	<a href="{{ url('/delete-student/'.$data->id) }}" onclick="return confirm('Are you sure to delete the student ?')">Delete</a></td>
	      </tr>
	      @endforeach
	    </tbody>

	  </table>
	</div>
@endsection