<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Route Parameter</title>
</head>
<body>
    <center> 
        <h1>Biodata</h1>
        
        <table style="text-align: left" >
            <tr>
                <th>Nama</th>
                <td> : </td>
                <td> {{ $nama }} </td>
            </tr>
    
            <tr>
                <th>Umur</th>
                <td> : </td>
                <td>{{ $umur }}</td>
            </tr>
    
            <tr>
                <th>Alamat</th>
                <td> : </td>
                <td>{{ $alamat }}</td>
            </tr>
    
            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>{{ $jenis_kelamin }}</td>
            </tr>
            
            <tr>
                <th>Hobby</th>
                <td> : </td>
                <td>{{ $hobby }}</td>
            </tr>
        </table>

    </center>
</body>
</html>