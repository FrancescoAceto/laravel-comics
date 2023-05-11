@extends('Layouts/main')

@section('content')

@foreach ($comics as $singlecomic)
<ul>
        <li>{{$singlecomic ['title']}}</li>
        <li>{{$singlecomic ['description']}}</li>
        <li>{{$singlecomic ['price']}}</li>
</ul>
@endforeach

@endsection