@extends('layouts.main')

@section('temp')
    <div class="main">
        <div class="content-pendahuluan">
            <div class="title-tugas">
                <h3>{{$prak6}}</h3>
            </div>
            <div class="main-tugas">
                <ol type="1">
                    <h5>Soal !</h5>
                    <li><h6>Jelaskan apa yang dimaksud dengan framework!</h6></li>
                    <li><h6>Apa perbedaan framework dengan library?</h6></li>
                    <li><h6>Jelaskan keunggulan menggunakan Laravel framework!</h6></li>
                    <li><h6>Jelaskan mengenai konsep MVC pada Laravel!</h6></li>
                    <li><h6>Jelaskan perbedaan Laravel dengan CI (CodeIgniter)!</h6></li>

                </ol>
                <ol type="1">
                    <h5>Jawaban :</h5>
                    <li>
                        <p>Framework adalah kerangka kerja atau sekumpulan kode yang berguna membantu atau mempermudah programmer dalam coding untuk membuat website, aplikasi, atau teknologi lainnya.</p>
                    </li>
                    <li>
                        <p>Perbedaan framework dan library secara bahasa framework adalah kerangka kerja sedangkan library adalah pustaka. Didalam framework bisa juga terdapat library, sedangkan library itu sendiri menyediakan pustaka - pustaka yang siap untuk digunakan. Framework tidak memiliki API yang stabil seperti library. Library mendefinisikan solusi dari sebuah masalah dan mengenkapsulasi implementasi dalam bentuk API yang mudah digunakan. Framework mengorganisasikan problem aplikasi yang lebih besar dan memberikan pengguna kemudahan untuk mengimplementasikan solusi masalah pengguna dengan lebih mudah.</p>
                    </li>
                    <li>
                        <p>Dalam penggunaan laravel framework, website atau aplikasi yang dibuat lebih mudah untuk dikembangkan. Laravel yang menggunakan Blade yang memiliki fungsi untuk mendesain layout. Fitur yang disediakan laravel seperti MVC yang berguna untuk mengelola data base. Didalam laravel ini juga terdapat pada banyaknya library object oriented yang tersedia. Modul dalam Laravel Bersifat Individu dan Independen, dengan begitu maka modul-modul tersebut akan membuat aplikasi web menjadi lebih informatif, modular, dan responsif.</p>
                    </li>
                    <li>
                        <p>MVC adalah kepanjangan dari data (Model) dari tampilan (View) dan cara bagaimana memprosesnya (Controller). Dimana model menyimpan behavior dan data dari sebuah aplikasi. Model itu sendiri tersambungnya ke database. Bukan dari controller ke database.  View adalah mengurus user interface dari sebuah aplikasi itu sendiri. Controller mengatur untuk menghubungkan model dan view dari keinginan user dan pembuat aplikasi itu sendiri.</p>
                    </li>
                    <li>
                        <p>Perbedaan Laravel dan CI (Codeigniter). CI dalam penggunaan library dan modul lebih ringkas dan ringan, sedangkan laravel mempunyai banyak modul dan library bisa dibilang lengkap. CI memakai database model relational object oriented sedangkan laravel menggunakan object oriented. Sedangkan dalam programming paradigma CI Menggunakan component oriented, laravel menggunakan object oriented event driven functional. Dalam penggunaan routing CI menggunakan eexplicit routing and implicit routing kalau laravel menggunakan explicit routing saja. Laravel memiliki fitur build in   moduls fitur ini memudahkan programmer dalam modul modul kecil, kemudian modul ini bisa digunakan project lainnya sedangkan CI tidak punya Fitri seperti laravel, programmer harus membuat modul itu sendiri.</p>
                    </li>
                </ol>
            </div>
        </div>
    </div>
@endsection
