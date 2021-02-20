@extends('intranet.plantilla.layout')

@section('title', 'Employee')

@section('head')
  <h1>Employee</h1>
@endsection

@section('body')
  <table border="1">
	 <thead>
	 <tr>
	   <th>ID</th>
	   <th>NAMES</th>
	   <th>LAST NAMES</th>
	   <th>DNI</th>
	 </tr>
	 </thead>
	 <tbody>
		@foreach($employees as $employee)
		  <tr>
			 <td>{{$employee->id}}</td>
			 <td>{{$employee->names}}</td>
			 <td>{{$employee->surnames}}</td>
			 <td>{{$employee->dni}}</td>
		  </tr>
		@endforeach
	 </tbody>
  </table>

  {{$employees->links()}}
@endsection
