<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Prak 7 | Create</title>
</head>
<body>
    <a href="\mahasiswa">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
        </svg>
    </a>
    <div class="container">
        <div class="card-body">
        <form action="{{url('mahasiswa')}}" method="POST" class="text-center">
            @csrf
            <table>    
                <tr class="form-group">
                    <td>
                        <label>NIM</label>
                    </td>
                    <td>
                        <input type="text" name="nim" class="from-control" placeholder="Input NIM disini !" ruqueired>
                    </td>
                </tr>
                <tr class="form-group">
                    <td>
                        <label>NAMA</label>
                    </td>
                    <td>
                        <input type="text" name="nama" class="from-control" placeholder="Input nama disini !" ruqueired>
                    </td>
                </tr>
                <tr class="form-group">
                    <td>
                        <label>UMUR</label>
                    </td>
                    <td>
                        <input type="text" name="umur" class="from-control" placeholder="Input umur disini !" ruqueired>
                    </td>
                </tr>
                <tr class="form-group">
                    <td>
                        <label>ALAMAT</label>
                    </td>
                    <td>
                        <input type="text" name="alamat" class="from-control" placeholder="Input alamat disini !" ruqueired>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-success" name="simpan">Save</button>
                    </td>
                </tr>
                {{ method_field('POST') }}
            </table>
        </form>
        </div>
    </div>
</body>
</html>
