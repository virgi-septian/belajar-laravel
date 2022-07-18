<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Route Optional Parameter</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&family=Ubuntu:wght@500&display=swap"
        rel="stylesheet">
</head>

<body>
    <fieldset>
        <legend>Toko Grosir</legend>
    
    <center >

        <h1>Selamat Datang di PT. Sinar Jaya</h1>
        Pesanan Anda : <br><br>
        @if ($produk !== " " || $produk2 !== " ")
            @if($produk == "Batako Besar")
                <h4>Material 1 <br></h4>
                Nama material 1 = {{ $produk }} <br>
                Harga material 1 = Rp. 50.000 <br> 
                <hr>
            @elseif ($produk == "Pasir Urug" )
                <h4>Material 1 <br></h4>
                Nama material 1 = {{ $produk1 }} <br>
                Harga material 1 = Rp.  30.000 <br>
                <hr>
            @elseif ($produk == "Bata Merah" )
                <h4>Material 1 <br></h4>
                Nama material 1 = {{ $produk1 }} <br>
                Harga material 1 = Rp.  40.000 <br>
                <hr>
            @elseif ($produk == "Batu Apung" )
                <h4>Material 1 <br></h4>
                Nama material 1 = {{ $produk1 }} <br>
                Harga material 1 = Rp.  65.000 <br>
                <hr>
            @else 
                <h4>Material 1 <br></h4>
                Nama material 1 = Mohon maaf material anda tidak ada <br>
                Harga Material 1 : - <br>
                <hr>
            @endif 

            @if($produk2 == "Batako Besar")
                <h4>Material 2 <br></h4>
                Nama material 2 : {{ $produk2 }} <br>
                Harga material 2 = Rp. 50.000 <br> 
            @elseif ($produk2 == "Pasir Urug" )
                <h4>Material 2 <br></h4>
                Nama material 2 = {{ $produk2 }} <br>
                Harga material 2 = Rp.  30.000 <br>
            @elseif ($produk2 == "Bata Merah" )
                <h4>Material 2 <br></h4>
                Nama material 2 = {{ $produk2 }} <br>
                Harga material 2 = Rp.  40.000 <br>
            @elseif ($produk2 == "Batu Apung" )
                <h4>Material 2 <br></h4>
                Nama material 2 = {{ $produk2 }} <br>
                Harga material 2 = Rp.  65.000 <br>
            @else 
                <h4>Material 2 <br></h4>
                Nama material 2 = Mohon maaf material anda tidak ada <br>
                Harga Material 2 : - <br>
            @endif 
        @endif  
    </center>
    </fieldset>
</body>

</html>
