@extends('layouts.app')
@section('content')

<html>
<head>  
    <title>Homepage</title>
</head>

<body>
    <h1>Products</h1>
    <a href="{{ route('products.create') }}">Add New Data</a><br/><br/>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table width='80%' border=0>
        <tr>
            <th>title</th>
            <th>pname</th>
            <th>pprice</th>
            <th>pquality</th>
            <th>psize</th>
            <th>pbrand</th>
            <th>pdiscount</th>
            <th>description</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->title }}</td>
            <td>{{ $product->pname }}</td>
            <td>{{ $product->pprice }}</td>
            <td>{{ $product->pquality }}</td>
            
            <td>{{ $product->psize }}</td>
            <td>{{ $product->pbrand }}</td>
            <td>{{ $product->pdiscount }}</td>
            <td>{{ $product->description }}</td>
            <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="Post">
                    <a href="{{ route('products.show',$product->id) }}">  Show </a>
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
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