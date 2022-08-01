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
   
    <form action="{{ route('posts.update',$post->id) }}" method="POST" name="form1">
        {!! csrf_field() !!}
        <table width="25%" border="0">

            
            <tr>
                <td>name</td>
                <td><input type="text" name="name" value="{{ $post->name }}"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email" value="{{ $post->email }}"></td>
            </tr>
            <tr>
                <td>mobile</td>
                <td><input type="text" name="mobile" value="{{ $post->mobile }}"></td>
            </tr>
            <tr>
                <td>address</td>
                <td><input type="text" name="address" value="{{ $post->address }}"></td>
            </tr>
            <tr>
                <td>age</td>
                <td><input type="text" name="age" value="{{ $post->age}}"></td>
            </tr>
            
            <tr>
                <td>password</td>
                <td><input type="text" name="password" value="{{ $post->password }}"></td>
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