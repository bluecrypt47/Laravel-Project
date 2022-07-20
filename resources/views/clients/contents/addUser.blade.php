<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm người dùng</title>
    <link rel="stylesheet" href="{{ asset('../assets/clients/css/bootstrap.min.css') }}">
</head>
<body>
    @include('clients.blocks.header')
    <div style="margin-top: 20px">
        <div class="container-fluid">
            <div class="row">
                @include('clients.blocks.menu')
                <div class="col-md-9">
                    @if ($errors->any())
                        <div class="alert alert-danger">Thêm người dùng không thành công. Vui lòng kiểm tra lại.</div>
                    @else
                        
                    @endif
                    <h3>Thêm người dùng</h3>
                    <hr>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label>Họ tên</label>
                            <input type="text" class="form-control" name="fullname" placeholder="Trần Văn A" value="{{old('fullname')}}" />
                            @error('fullname')
                                <span style="color: red;">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="abc@gmail.com" value="{{old('email')}}" >
                            @error('email')
                                <span style="color: red;">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Mật khẩu</label>
                            <input type="text" class="form-control" name="password" placeholder="Mật khẩu"  >
                            @error('password')
                                <span style="color: red;">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                        <a href="{{route('home')}}" class="btn btn-warning">Quay lại</a>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('clients.blocks.footer')

    <script src="{{ asset('../assets/clients/css/bootstrap.min.css') }}"></script>
</body>
</html>