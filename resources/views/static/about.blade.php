@extends('layouts.app')

@section('content')
    <h1> {{$title}} </h1>
    <p> Melayani jasa-jasa sebagai berikut: </p>
    @if(count($services) > 0)
        <ul>
            @foreach($services as $service)
                <li>{{$service}}</li>
            @endforeach
        </ul>
    @endif
    <p> Website ini dibuat oleh: Rahmad Hidayat Rambe <p>
    <ol>
        <li> Rohizh </li>
    <ol>
@endsection