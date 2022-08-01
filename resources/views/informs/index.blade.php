@extends('layouts.app')
@section('content')

<html>
<head>  
    <title>Homepage</title>
</head>

<body>
    <h1>Inform</h1>
    <a href="{{ route('informs.create') }}">Add New Data</a><br/><br/>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

        <div class="row">
        <div class="form-group">
            <th>name</th>
            <th>email</th>
            <th>address</th>
            <th>city</th>
            <th>state</th>
            <th>country</th>
            <th>zipcode</th>
            <th>mobile</th>
            
        </div>
    </div>
        @foreach ($informs as $inform)
        <div class="form-group">
            <td>{{ $inform->name }}</td>
            <td>{{ $inform->email }}</td>
            <td>{{ $inform->address }}</td>
            <td>{{ $inform->city }}</td>
            <td>{{ $inform->state }}</td>
            <td>{{ $inform->country }}</td>
            <td>{{ $inform->zipcode }}</td>
            <td>{{ $inform->mobile }}</td>
           
            <td>
                    <form action="{{ route('informs.destroy',$inform->id) }}" method="Post">
                    <a class="btn btn-success" href="{{ route('informs.show',$inform->id) }}">  Show </a>
                    <a class="btn btn-primary" href="{{ route('informs.edit',$inform->id) }}">Edit</a>
                    <!-- @csrf
                    @method('DELETE') -->
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </form>
            </td>
        </div>
    </div>
        @endforeach
        
    </table>
</body>
</html>

@endsection