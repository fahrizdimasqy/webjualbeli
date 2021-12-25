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
  <tr>
    <th>No</th>
    <th>Nama Barang</th>
    <th>Harga Barang</th>
    <th>Aksi</th>
  </tr>
  <tr>
  @foreach($barang as $key => $data)
    <td>{{ $key+1 }}</td>
    <td>{{ $data->nama_barang }}</td>
    <td>{{ $data->harga_barang }}</td>
    <td> <a href="{{route('pembelian',$data->id_barang)}}">Beli</a></td>
  </tr>
  @endforeach
</table>
@if(session('tampil'))
{{session('tampil')}}
@endif
</body>
</html>