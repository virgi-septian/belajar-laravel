<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Passing Looping Controller ke View</title>
</head>
<body>
    
    <fieldset>
        <legend style="font-weight: bold; text-align: center;">Latihan 2</legend>
        <br><br>
        <center>
            
            <table border="1" style="text-align: left">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Mata Kuliah</th>
                        <th>Dosen Pembimbing</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                    </tr>
                @foreach($mahasiswa as $data)    
                    
                    <tr>
                        <td>{{ $data['id'] }}</td>
                        <td>{{ $data['nama'] }}</td>
                        <td>
                            @if($data['id_dosen'] == 1)
                                Pemrograman Mobile
                            @elseif($data['id_dosen'] == 2)
                                Pemrograman Web    
                            @endif
                        </td>
                        <td>
                            @if($data['id_dosen'] == 1)
                                Yusuf Bachtiar
                            @elseif($data['id_dosen'] == 2)
                                Yasir Riyadi    
                            @endif
                        </td>
                        <td>{{ $data['nilai'] }}</td>
                        <td>
                            @if ($data['nilai'] == 100 || $data['nilai'] >= 90)
                                A
                            @elseif ($data['nilai'] == 89 || $data['nilai'] >= 80)
                                B 
                            @elseif ($data['nilai'] == 79 || $data['nilai'] >= 70)
                                C   
                            @elseif ($data['nilai'] == 69 || $data['nilai'] >= 50)
                                D   
                            @elseif($data['nilai'] == 49 || $data['nilai'] >= 0)
                                E 
                            @else
                                Eror 
                            @endif   
                        </td>
                    </tr>
                @endforeach
                
            </table>
        </center>
    </fieldset>
</body>
</html>