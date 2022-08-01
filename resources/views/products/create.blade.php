@extends('layouts.app')
@section('content')


 <html>
  <head>
    <title> Add Data</title>
  </head>
  <body>
  
    <a href="{{ route('products.index') }}">back</a><br/><br/>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
    <form action="{{ route('products.store') }}" method="POST" name="form1">
        {!! csrf_field() !!}
        <table width="25%" border="0">

            <tr>
                <td>title</td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <td>product name</td>
                <td><input type="text" name="pname"></td>
            </tr>
            <tr>
                <td>product price</td>
                <td><input type="text" name="pprice"></td>
            </tr>
            <tr>
                <td>product quality</td>
                <td><input type="text" name="pquality"></td>
            </tr>
            <tr>
                <td>product size</td>
                <td><input type="text" name="psize"></td>
            </tr>
            
            <tr>
                <td>product brand</td>
                <td><input type="text" name="pbrand"></td>
            </tr>
            <tr>
                <td>product discount</td>
                <td><input type="text" name="pdiscount"></td>
            </tr>
            
            <tr>
                <td>product description</td>
                <td><input type="text" name="description"></td>
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