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
        <legend> <b>Latihan 1</b> </legend>
    
    <ul>
        @foreach($programs['navbar'] as $navbar)
            <li>{{ $navbar }}</li>
            @if($navbar == "Berita") 
            <ul>
                @foreach($programs['navbar_b'] as $berita )
                    <li>
                        {{ $berita }}
                    </li>
                    @if($berita == "Olahraga")
                        <ul>
                            @foreach ($programs['navbar_o'] as $olahraga)
                                <li>{{ $olahraga }}</li>
                            @endforeach
                        </ul>
                    @endif
                @endforeach
            </ul>    
            @endif
        @endforeach
    </ul>

</fieldset>
</body>
</html>