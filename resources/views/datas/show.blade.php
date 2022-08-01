@extends('layouts.app')
@section('content')


        
        <h2> Show Post</h2>
        <a href="{{ route('forms.index') }}"> Back</a><br>      
    <div class="row">
    <div class="form-group">   
        <td><strong>name:</strong>
                {{ $form->name }}
        </td><br>
    </div>
    <div class="form-group">
        <td><strong>email:</strong>
                {{ $form->email }}
        </td>
    </div>
    <div class="form-group">
        <td><strong>mobile:</strong>
                {{ $form->mobile }}
        </td><br>
    </div>
    <div class="form-group">
        <td><strong>address:</strong>
                {{ $form->address }}
        </td>
    </div>
    <div class="form-group">
        <td><strong>age:</strong>
                {{ $form->age }}
        </td><br>
    </div>
    <div class="form-group">
        <td><strong>password:</strong>
                {{ $form->password }}
        </td>
   </div>
@endsection

