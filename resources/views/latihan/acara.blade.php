<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="text-align: center">
    <fieldset>
        <legend style="text-align: center; font-weight: bold;">STASIUN TV DIGITAL | Latihan 3</legend> 
        <br><br>
        @foreach($tv as $tv)
        <center>
        <table border="1" cellspacing="0">
            <tr>
                <th colspan="5" style="text-align: center; ">
                    {{ $tv['nama'] }}
                </th>
            </tr>
            
            <tr>
                <th style="text-align: left">Acara </th>
                @foreach($tv['acara'] as $acara)  
                <td>{{ $acara }}</td>
                @endforeach
            </tr>
            <tr>
                <th style="text-align: left">Jam Tayang</th>
                @foreach($tv['tayang'] as $tayang)  
                <td>{{ $tayang }}</td>
                @endforeach
            </tr>
            <tr>
                <th style="text-align: left">Jadwal Tayang</th>
                @foreach($tv['tg'] as $tg)  
                <td>{{ $tg }}</td>
                @endforeach
            </tr>
        </table>
        </center>
        <br>
        @endforeach
    </fieldset>
</body>
</html>