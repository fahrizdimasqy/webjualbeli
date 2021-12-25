<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
    <a href="{{route('tambah')}}">Tambah Barang</a>
  <tr>
    <th>No</th>
    <th>Nama Barang</th>
    <th>Harga Barang</th>
  </tr>
  <tr>
  @foreach($barang as $key => $data)
    <td>{{ $key+1 }}</td>
    <td>{{ $data->nama_barang }}</td>
    <td>{{ $data->harga_barang }}</td>
  </tr>
  @endforeach
</table>
</body>
</html>