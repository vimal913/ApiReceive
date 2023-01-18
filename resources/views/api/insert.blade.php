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
            <form action="{{'/api/store'}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Product Name">
                  </div>
                  <div class="form-group">
                    <label for="detail">Product Detail</label>
                    <input type="text" class="form-control" id="detail" name="detail" placeholder="Product Detail">
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    
</body>
</html>