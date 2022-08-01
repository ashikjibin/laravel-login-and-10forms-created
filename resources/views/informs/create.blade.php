@extends('layouts.app')
@section('content')


 <html>
  <head>
    <title> Add Data</title>
  </head>
  <body>

    <div>
    <a href="{{ route('informs.index') }}">back</a><br/><br/>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
    <form action="{{ route('informs.store') }}" method="POST" name="form1">
        {!! csrf_field() !!}
        
            <div class="row">
                <div class="form-group">
                <td>name</td>
                <td><input type="text" name="name" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>email</td>
                <td><input type="text" name="email" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>address</td>
                <td><input type="text" name="address" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>city</td>
                <td><input type="text" name="city" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>state</td>
                <td><input type="text" name="state" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>country</td>
                <td><input type="text" name="country" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>zipcode</td>
                <td><input type="text" name="zipcode" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>mobile</td>
                <td><input type="text" name="mobile" class="form-control"></td>
                </div>

                
            <div class="form-group">         
                <td></td>
                <td><input type="Submit" name="submit" class="btn btn-danger"></td>
            </div>
         

    </form>
   
  </body>
  </html>
@endsection