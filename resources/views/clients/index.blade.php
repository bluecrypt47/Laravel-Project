<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('../assets/clients/css/bootstrap.min.css') }}">
</head>
<body>
    @include('clients.blocks.header')
    <div style="margin-top: 20px">
        <div class="container-fluid">
            <div class="row">
                @include('clients.blocks.menu')
                <div class="col-md-9">
                    @if (session('msg'))
                        <div class="alert alert-success">{{session('msg')}}</div>
                    @endif
                    <a href="{{route('addUser')}}" class="btn btn-primary">Thêm người dùng</a>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 3%">STT</th>
                                <th>Họ tên</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Ngày tạo</th>
                                <th>Ngày cập nhật</th>
                                <th style="width: 11%">Thực thi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($listUsers))
                            @foreach ($listUsers as $key => $item)
                                <tr>
                                    <th style="font-weight: normal">{{$key+1}}</th>
                                    <th style="font-weight: normal">{{$item -> fullname}}</th>
                                    <th style="font-weight: normal">{{$item -> email}}</th>
                                    <th style="font-weight: normal">{{$item -> password}}</th>
                                    <th style="font-weight: normal">{{$item -> dateCreate}}</th>
                                    <th style="font-weight: normal">{{$item -> dateUpdate}}</th>
                                    <th>
                                        <a href="{{route('editUser',['id' => $item->id])}}" class="btn btn-primary btn-sm">Sửa</a> |
                                        <a href="{{route('delUser',['id' => $item->id])}}" class="btn btn-warning btn-sm">Xóa</a>
                                    </th>
                                    
                                </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="8" style="text-align: center"> Không có Users</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('clients.blocks.footer')

    <script src="{{ asset('../assets/clients/css/bootstrap.min.css') }}"></script>
</body>
</html>