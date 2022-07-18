<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <br>
        <div class="card">
        <div class="card-header">
            Latihan Migration and Seed
        </div>
            <div class="card-body">
                <h5>StaffBranch</h5>
                <table class="table table-bordered" cellspacing="0">
                    <tr>
                        <th class="table-primary">staffNo</th>
                        <th class="table-primary">sName</th>
                        <th class="table-primary">position</th>
                        <th class="table-primary">salary</th>
                        <th class="table-primary">branchNo</th>
                        <th class="table-primary">bAddress</th>
                    </tr>
                    @foreach($company as $k => $item)
                        <tr>
                            <td>{{ $item->staffNo }}</td>
                            <td>{{ $item->sName}}</td>
                            <td>{{ $item->position}}</td>
                            <td>{{ $item->salary}}</td>
                            <td>{{ $item->branchNo}}</td>
                            <td>{{ $item->bAddress}}</td>
                        </tr>
                    @endforeach
                </table>
                <br>
                <div class="row justify-content-center">

                    {{-- Table staff --}}
                    <div class="col-md-6">
                        <h5>Staff</h5>
                        <table class="table table-bordered" cellspacing="0">
                            <tr>
                                <th class="table-primary">staffNo</th>
                                <th class="table-primary">sName</th>
                                <th class="table-primary">position</th>
                                <th class="table-primary">salary</th>
                                <th class="table-primary">branchNo</th>
                            </tr>
                            @foreach($staff as $data)
                                <tr>
                                    <td>{{ $data['staffNo'] }}</td>
                                    <td>{{ $data['sName']}}</td>
                                    <td>{{ $data['position']}}</td>
                                    <td>{{ $data['salary']}}</td>
                                    <td>{{ $data['branchNo']}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                    {{-- table branch --}}
                    <div class="col-md-6">
                        <h5>Branch</h5>
                        <table class="table table-bordered">
                            <tr>
                                <th class="table-primary">branchNo</th>
                                <th class="table-primary">bAddress</th>
                            </tr>
                            @foreach($branch as $data)
                                <tr>
                                    <td>{{ $data['branchNo'] }}</td>
                                    <td>{{ $data['bAddress']}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>  
        </div>  
    </div>
</body>
</html>