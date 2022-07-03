@extends('layouts.main')

@section('container')
<style>
    body{
    background-image:url('img/bg.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    
    }
</style>
<h1>WELCOME TO DIWANTARA HERBAL</h1>
    <br>
    <img src="{{ asset('img/diwantaraherbal.png') }}" alt="Diwantara Herbal">
@endsection