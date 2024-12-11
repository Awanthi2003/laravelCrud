@extends('layout.app')


@section('content')

<h2 class="mb-4">All students</h2>
<a href="{{ route('students.create') }}">Add New Student </a>

<table class="table table-bordered">
    <tr class="table-dark">
        <th>Id</th>
        <th>Name</th>
        <th>email</th>
        <th>phone</th>
        <th>Action</th>
</tr>
@foreach($student as $stu)
<tr>
    <td>{{$stu->id }}</td>
    <td>{{$stu->name }}</td>
    <td>{{$stu->email}}</td>
    <td>{{$stu->phone }}</td>
    <td>
        <a href="{{route ('students.edit',$student->id)}}"class="btn btn-sm btn-primary">edit</a>
        <form action="{{route ('students.destory',$student->id)}}"method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn=sm btn-danger">Delete</button>
        </form>
</td>
</tr>
@endforeach
</table>
@endsection