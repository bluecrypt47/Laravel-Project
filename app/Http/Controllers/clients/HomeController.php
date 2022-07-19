<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Users;


class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $user = new Users();

        $listUsers = $user->getListUser();

        return view('clients.index', compact('listUsers'));
    }
}
