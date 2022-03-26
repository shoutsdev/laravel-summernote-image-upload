<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel 9 Summernote Editor Image Upload Demo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="post" action="{{ route('user.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-2">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name"/>
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group mb-2">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email"/>
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group mb-2">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password"/>
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                </div>
                <div class="form-group mb-2">
                    <label>Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password"/>
                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                </div>
                <div class="form-group mb-2">
                    <label>Description</label>
                    <textarea id="summernote" name="content"></textarea>
                </div>
                <span class="text-danger">{{ $errors->first('content') }}</span>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-danger btn-block">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#summernote').summernote({
            height: 450,
        });
    });
</script>
</body>
</html>
