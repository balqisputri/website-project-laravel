<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Peserta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #eaeaea;
        }
    </style>
</head>
<body>
    <h1>Laporan Peserta PPDB</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Asal Sekolah</th>
                <th>Jurusan</th>           
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>
            @foreach($data as $item)
            <tr>
                <td>{{$i}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->asal_sekolah}}</td>
                <td>{{$item->jurusan->jurusan}}</td>
            </tr>
            <?php $i++; ?>
            @endforeach
        </tbody>
    </table>
</body>
</html>
