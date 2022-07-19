<div class="col-md-9">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Password</th>
                <th>Ngày tạo</th>
                <th>Ngày cập nhật</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($listUsers))
            @foreach ($listUsers as $key => $item)
                <tr>
                    <th>{{$key+1}}</th>
                    <th>{{$item -> fullname}}</th>
                    <th>{{$item -> email}}</th>
                    <th>{{$item -> password}}</th>
                    <th>{{$item -> dateCreate}}</th>
                    <th>{{$item -> dateUpdate}}</th>
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