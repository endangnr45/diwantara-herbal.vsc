@extends('layouts.main')

@section('container')
   <h1>Diwantara Herbal</h1>
   <img src="img/diwantaraherbal.png" alt="" width="100" height="100">
   {{-- <h3><?php echo $name ?></h3>
   <p><?= $email ?></p> --}}
   <p>{{ $alamat }}</p>
   <p>MOTTO : {{ $motto }}</p>
   <p>VISI : {{ $visi }}</p>
   <p>MISI : {{ $misi }}</p>
@endsection

