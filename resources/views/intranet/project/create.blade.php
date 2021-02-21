@extends('intranet.plantilla.layout')

@section('title', 'New Project')

@section('head')
  <h1>New Project</h1>
@endsection

@section('body')
  <form action="">
	 <input type="text" name="project" placeholder="Enter project"><br>
	 <input type="text" name="description" placeholder="Enter Description"><br>
	 <input type="text" placeholder="Employee ID">
	 <input type="text" placeholder="Employee">
  <a href="#">View Modal Employee</a><br>
	 <input type="date" name="presentation_date"><br>
	 <input type="submit" value="Save">

  </form>

  <div>
	 <table border="1">
		<thead>
			<tr>
				<th>#</th>
				<th>ID</th>
				<th>NAMES</th>
				<th>SURNAMES</th>
				<th>DNI</th>
			</tr>
		</thead>
		<tbody>
			@foreach($employees as $employee)
				<tr>
				  <td><input type="radio"></td>
				  <td>{{$employee->id}}</td>
				  <td>{{$employee->names}}</td>
				  <td>{{$employee->surnames}}</td>
				  <td>{{$employee->dni}}</td>
				</tr>
			 @endforeach
		</tbody>
	 </table>
  </div>
@endsection
