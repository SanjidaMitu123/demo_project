@extends('backend.master')
@section('main')
<h1>Add new Category</h1>
    <form action="{{route('category.insert')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Category Name</label>
            <input name="name" required placeholder="Enter Category name" type="text" class="form-control" id="name" aria-describedby="emailHelp">

        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea placeholder="Enter Category Description" class="form-control" name="description" id="description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
