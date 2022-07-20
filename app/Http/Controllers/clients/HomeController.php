<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Users;


class HomeController extends Controller
{
    private $user;
    public function __construct()
    {
        $this->user = new Users();
    }

    public function index()
    {
        $listUsers = $this->user->getListUser();

        return view('clients.index', compact('listUsers'));
    }

    public function addUser()
    {
        return view('clients.contents.addUser');
    }

    public function postAddUser(Request $request)
    {
        $request->validate([
            'fullname' => 'required|min:6|max:30',
            'email' => 'required|email',
            'password' => 'required|min:6|max:30'
        ], [
            'fullname.required' => 'Họ tên không được để trống.',
            'fullname.min' => 'Họ tên phải từ :min đến 30 ký tự.',
            'fullname.max' => 'Họ tên phải từ 6 đến :max ký tự.',

            'email.required' => 'Email không được để trống.',
            'email.email' => 'Email không đúng định dạng.',

            'password.required' => 'Mật khẩu không được để trống.',
            'password.min' => 'Mật khẩu phải từ :min đến 30 ký tự.',
            'password.max' => 'Mật khẩu phải từ 6 đến :max ký tự.'
        ]);

        $data = [
            $request->fullname,
            $request->email,
            $request->password
        ];

        $this->user->addUser($data);

        return redirect()->route('home')->with('msg', 'Thêm người dùng thành công!');
    }
}
