@extends('layouts.app')

@section('content')

    Ma doom liste

    @foreach ($categories as $category)
        <p>This is user {{ $category->labelCategory }}</p>
    @endforeach



@endsection