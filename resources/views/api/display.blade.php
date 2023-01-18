<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="content mt-4">
            <a href="{{url('api/insert')}}" class="btn btn-primary mb-3">ADD</a>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Detail</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jsonData['data'] as $data)
                    {{-- @dd($data['name']) --}}
                    <tr>
                        <td>{{ $data['id']}}</td>
                        <td>{{ $data['name']}}</td>
                        <td>{{ $data['detail']}}</td>
                        <td>{{ $data['created_at']}}</td>
                        <td>
                            <a href="{{ url('api/edit/'.$data['id'])}}" class="btn btn-info">Edit</a>
                            <a href="{{ url('api/delete/'.$data['id'])}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>