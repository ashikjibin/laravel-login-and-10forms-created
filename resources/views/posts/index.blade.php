@extends('layouts.app')
@section('content')

<html>
<head>  
    <title>Homepage</title>
</head>

<body>
    <h1>Post</h1>
    <a href="{{ route('posts.create') }}">Add New Data</a><br/><br/>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table width='80%' border=0>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>mobile</th>
            <th>address</th>
            <th>age</th>
            <th>password</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->name }}</td>
            <td>{{ $post->email }}</td>
            <td>{{ $post->mobile }}</td>
            <td>{{ $post->address }}</td>
            <td>{{ $post->age }}</td>
            <td>{{ $post->password }}</td>
            <td>
                    <form action="{{ route('posts.destroy',$post->id) }}" method="Post">
                    <a href="{{ route('posts.show',$post->id) }}">  Show </a>
                    <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </form>
            </td>
        </tr>
        @endforeach
        
    </table>
</body>
</html>
@endsection