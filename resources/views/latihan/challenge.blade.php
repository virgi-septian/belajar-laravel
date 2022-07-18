
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
    <legend><b>Challenge</b></legend> <br><br>
        <center>
            {{-- Awal --}}
            @foreach($belanja as $belanja)
            <table border="1" cellpadding="3" cellspacing="0">
                <tr>
                    <th colspan="6">
                        Struk {{ $belanja['nama'] }}
                    </th>
                    
                </tr>
                <tr>
                    @foreach($belanja['barang'] as $key => $barang)
                    <th>{{ $barang }}</th>
                    @endforeach
                    <th>Jumlah</th>
                    <th colspan="5">
                        @foreach($belanja['harga'] as $key => $harga)
                            @php $hasil = array_sum($belanja['harga']) @endphp 
                        @endforeach
                        @if($hasil >= 500001 )   
                            Cashback 10% 
                        @elseif($hasil <= 500000 || $hasil >= 250000)
                            Cashback 5% 
                        @elseif($hasil <=249999 || $hasil >= 0)   
                            -
                        @else
                            -    
                        @endif
                    </th>
                </tr>
                <tr>
                    @foreach($belanja['harga'] as $key => $harga)
                    <td>Rp. {{number_format($harga,0,".",".") }}</td>
                    @endforeach
                    <td> Rp. {{ number_format($hasil,0,".",".") }} </td>
                    <td colspan="2">
                        @if($hasil >= 500001 )   
                            @php $cashback = 0.1; @endphp
                        @elseif($hasil <= 500000 || $hasil >= 250000)
                            @php $cashback = 0.05; @endphp 
                        @elseif($hasil <=249999 || $hasil >= 0)   
                            -
                        @else
                            -    
                        @endif

                        @php
                            $hasil2 = $cashback * $hasil;
                            $hasil3 = $hasil - $hasil2;
                        @endphp
                        Rp. {{ number_format($hasil2,0,".",".") }}
                    </th>
                    {{-- <th>Rp. {{number_format($hasil,0,".",".") }}</th> --}}
                </tr>
                <tr>
                    <th colspan="5">Total yang harus dibayar</th>
                    <td> Rp. {{ number_format($hasil3,0,".",".") }} </td>
                </tr>
            </table>
            <br>
            @endforeach
            {{-- Akhir --}}
        </center>
    </fieldset>    
    </body>
</html>