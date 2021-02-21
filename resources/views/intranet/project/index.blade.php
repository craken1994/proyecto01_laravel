@extends('intranet.plantilla.layout')

@section('title', 'Project')

@section('head')
  <h1>Project</h1>
@endsection

@section('body')
  <a href="{{route('project.create')}}">New</a>
  <table border="1">
	 <thead>
	 <tr>
	   <th>ID</th>
	   <th>PROJECT</th>
	   <th>DESCRIPTION</th>
	   <th>PRESENTATION DATE</th>
	   <th>EMPLOYEE</th>
	 </tr>
	 </thead>
	 <tbody>
		@foreach($projects as $project)
		  <tr>
			 <td>{{$project->id}}</td>
			 <td>{{$project->project}}</td>
			 <td>{{$project->description}}</td>
			 <td>{{$project->presentation_date}}</td>
			 <td>{{$project->names}}  {{$project->surnames}}</td>
		  </tr>
		@endforeach
	 </tbody>
  </table>

  {{--$projects->links()--}}
@endsection
