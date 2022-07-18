<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <Fieldset>
        <legend>Data Siswa</legend>
        @foreach($siswa as $a)
            Id = {{ $a['id'] }} <br>
            Nama = {{ $a['nama'] }} <br>
            Umur = {{ $a['umur'] }} <br>
            Status :
            @if($a['umur'] >= 17)
                Anda berhak mendapat SIM <br>
            @else
                Anda belum berhak mendapat SIM <br>    
            @endif
            Kelas = {{ $a['kelas'] }} <br>
            Daftar Mata Pelajaran : <br>
            @foreach($a['mapel'] as $mapel)
                <li>{{ $mapel }}</li>
            @endforeach
            <hr>
        @endforeach
    </Fieldset>
</body>
</html>