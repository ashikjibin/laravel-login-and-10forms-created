@extends('layouts.app')
@section('content')
<html>
<head>  
    <title>Homepage</title>
</head>

<body>
<h1>Customer</h1>
    <a href="{{ route('customers.create') }}">Add New Data</a><br/><br/>

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
            <th>purchasedata</th>
            <th>serialnumber</th>
            <th>purchaseplace</th>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->mobile }}</td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->purchasedata }}</td>
            <td>{{ $customer->serialnumber }}</td>
            <td>{{ $customer->purchaseplace }}</td>
            <td>
                    <form action="{{ route('customers.destroy',$customer->id) }}" method="Post">
                    <a href="{{ route('customers.show',$customer->id) }}">  Show </a>
                    <a class="btn btn-primary" href="{{ route('customers.edit',$customer->id) }}">Edit</a>
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