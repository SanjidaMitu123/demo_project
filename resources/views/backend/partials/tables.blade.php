@extends('backend.master')
@section('main')


<h1>Category</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">description</th>
     
   
    </tr>

  </thead>
  <tbody>
  @foreach($list as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td >{{$data -> name}}</td>
      <td >{{$data -> description}}</td>
      
    </tr>
  @endforeach
    
  </tbody>
</table>


@stop