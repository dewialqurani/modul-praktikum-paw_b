<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Prak 7 | Daftar MHS</title>
</head>
<body>
    <h1 class="text-center">Daftar Mahasiswa</h1>
    <button type="button" class="btn btn-info"><a href="{{url('mahasiswa/create')}}" style= "text-decoration:none; color:white;">Tambah Data +</a></button>
    <br><br>
<div class="container">
    <div class="row">
    <table class="table">
    <thead>
      <tr class="text-center">
        <th>NIM</th>
        <th>NAMA</th>
        <th>UMUR</th>
        <th>ALAMAT</th>
        <th>NILAI</th>
        <th collspan="3">ACTION</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    @foreach($datas as $key=>$value)
    <tbody>
      <tr>
        <td><a href="{{url('mahasiswa3/'.$value->nim)}}">{{$value->nim}}</a></td>
        <td>{{$value->nama}}</td>
        <td>{{$value->umur}}</td>
        <td>{{$value->alamat}}</td>
        <td>{{$value->nilai}}</td>
        <td><button type="button" class="btn btn-success"><a href="{{url('mahasiswa/'.$value->id.'/edit')}}" style= "text-decoration:none; color:white;">UPDATE</a></button></td>
        <td>
            <form action="{{url('mahasiswa/'.$value->id)}}" method="POST">
                @csrf 
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger" style="color:white;">DELETE</button>
            </form>
        </td>
        <td><button type="button" class="btn btn-warning"><a href="{{url('mahasiswa2/'.$value->id.'/edit')}}" style= "text-decoration:none; color:white;">NILAI</a></button></td>
      </tr> 
    </tbody>
    @endforeach
  </table>
    </div>
</div>
</body>
</html>