<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Pemain MU</title>
</head>
<body class="m-5">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Pemain MU</h2>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Pemain</th>
                            <th scope="col">No_Punggung</th>
                            <th scope="col">Posisi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_pemain as $pemain)
                            <tr>
                                <th scope="row">{{$pemain->id}}</th>
                                <td>{{ $pemain->nama_pemain }}</td>
                                <td>{{ $pemain->no_punggung }}</td>
                                <td>{{ $pemain->posisi }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>