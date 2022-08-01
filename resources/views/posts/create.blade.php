@extends('layouts.app')
@section('content')


 <html>
  <head>
    <title> Add Data</title>
  </head>
  <body>
  
    <a href="{{ route('posts.index') }}">back</a><br/><br/>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
    <form action="{{ route('posts.store') }}" method="POST" name="form1">
        {!! csrf_field() !!}
        <table width="25%" border="0">

            <tr>
                <td>name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>mobile</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr>
                <td>address</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>age</td>
                <td><input type="text" name="age"></td>
            </tr>
            
            <tr>
                <td>password</td>
                <td><input type="text" name="password"></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="Submit" name="submit" value="Submit"></td>
            </tr>
         </table>

    </form>
   
  </body>
  </html>
@endsection