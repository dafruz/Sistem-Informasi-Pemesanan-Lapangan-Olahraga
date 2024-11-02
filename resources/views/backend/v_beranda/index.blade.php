@extends('backend.v_layouts.app')

@section('content')
    <!-- contentAwal -->
    <h3>{{$judul}}</h3>
    <p>
        Pemesanan Lapangan Olahraga<br>
        Selamat Datang, <b>{{ Auth::user()->nama }}</b> pada website Pemesanan Lapangan Olahraga dengan hak akses yang anda miliki <br> sebagai 
        <b>
            @if (Auth::user()->role == 1)
                Super Admin
            @elseif(Auth::user()->role == 0)
                Admin
            @endif
        </b><br> 
        ini adalah halaman utama dari aplikasi ini.
    </p>
    <!-- contentAkhir -->
@endsection
