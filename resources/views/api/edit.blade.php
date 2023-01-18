<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h2 class="text-center mt-4">Product Update</h2>
            <form action="{{'/api/store'}}" method="post">
                @csrf
                {{-- @foreach ($jsonData['data'] as $data) --}}
                    
                
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Product Name" value="{{$jsonData['data']['name']}}">
                  </div>
                  <div class="form-group">
                    <label for="detail">Product Detail</label>
                    <input type="text" class="form-control" id="detail" name="detail" placeholder="Product Detail" value="{{$jsonData['data']['detail']}}">
                  </div>
                  {{-- @endforeach --}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    
</body>
</html>