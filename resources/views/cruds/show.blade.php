@extends('layouts.app')
@section('content')


        
        <h2> Show Post</h2>
        <a href="{{ route('cruds.index') }}"> Back</a><br>      
    <div class="row">
    <div class="form-group">   
        <td><strong>name:</strong>
                {{ $crud->name }}
        </td><br>
    </div>
    <div class="form-group">
        <td><strong>email:</strong>
                {{ $crud->email }}
        </td>
    </div>
    <div class="form-group">
        <td><strong>mobile:</strong>
                {{ $crud->mobile }}
        </td><br>
    </div>
    <div class="form-group">
        <td><strong>address:</strong>
                {{ $crud->address }}
        </td>
    </div>
    <div class="form-group">
        <td><strong>age:</strong>
                {{ $crud->age }}
        </td><br>
    </div>
    <div class="form-group">
        <td><strong>password:</strong>
                {{ $crud->password }}
        </td>
   </div>
@endsection

