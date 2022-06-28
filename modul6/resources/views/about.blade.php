@extends('layouts.main')

@section('temp')
    <div class="main">
        <div class="content-about">
            <div class="content-sidebar">
                <div class="image-people">
                    <img src="img/{{ $imagePeople }}" class="rounded-circle float-start" alt="Dewi Imani Al Qurani" width="350px" style="border-radius: 250px;">
                </div>
            </div>
            <div class="main-content">
                <div class="title-biodata">
                    <h3>DATA DIRI</h3>
                </div>
                <div class="biodata">
                    <ul>
                        <h4>Profil</h4>
                        <li>
                            <p>Nama : {{ $nama }}</p>
                        </li>
                        <li>
                            <p>Tempat, tanggal lahir : {{ $ttl }}</p>
                        </li>
                        <li>
                            <p>Janis Kelamin : {{ $jk }}</p>
                        </li>
                        <li>
                            <p>Agama : {{ $agama }}</p>
                        </li>
                        <li>
                            <p>Kewarganegaraan : {{ $negara }}</p>
                        </li>
                        <li>
                            <p>Alamat : {{ $alamat }}</p>
                        </li>
                        <h4>Kontak</h4>
                        <li>
                            <p>No HP : {{ $noHp }}</p>
                        </li>
                        <li>
                            <p>E-mail : {{ $email }}</p>
                        </li>
                        <li>
                            <p>Instagram : {{ $ig }}</p>
                        </li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection