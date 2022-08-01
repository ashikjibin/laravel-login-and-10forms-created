@extends('layouts.app')
@section('content')

    <tr>
        
        <h2> Show Post</h2>
        <a href="{{ route('forms.index') }}"> Back</a><br>      
        
        <td><strong>name:</strong>
                {{ $form->name }}
        </td><br>
        
        <td><strong>email:</strong>
                {{ $form->email }}
        </td>
        <td><strong>mobile:</strong>
                {{ $form->mobile }}
        </td><br>
        
        <td><strong>address:</strong>
                {{ $form->address }}
        </td>
        <td><strong>age:</strong>
                {{ $form->age }}
        </td><br>
        
        <td><strong>password:</strong>
                {{ $form->password }}
        </td>
   </tr>
@endsection

