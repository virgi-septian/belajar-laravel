<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Migrations Database</title>
</head>
<body>
    <fieldset>
        <legend>Data Post</legend>
        <br>
        <table border="1" cellspacing="0">
        <tr>
            <td>No</td>
            <td>Tittle</td>
            <td>Content</td>
        </tr>
        <?php $no =1 ?>
        @foreach($post as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data['tittle'] }}</td>
                <td>{{ $data->content}}</td>
            </tr>
            @endforeach
        </table>
    </fieldset>
    </body>
</html>