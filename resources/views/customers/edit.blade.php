@extends('layouts.app')
@section('content')


 <html>
  <head>
    <title> Add Data</title>
  </head>
  <body>
  
    <a href="{{ route('customers.index') }}">back</a><br/><br/>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   
    <form action="{{ route('customers.update',$post->id) }}" method="POST" name="form1">
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
                <td>purchasedata</td>
                <td><input type="text" name="purchasedata" value="{{ $post->purchasedata}}"></td>
            </tr>
            
            <tr>
                <td>serialnumber</td>
                <td><input type="text" name="serialnumber" value="{{ $post->serialnumber }}"></td>
            </tr>

            <tr>
                <td>purchaseplace</td>
                <td><input type="text" name="purchaseplace" value="{{ $post->purchaseplace }}"></td>
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