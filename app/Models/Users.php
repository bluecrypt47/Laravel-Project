<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;

    public function getListUser()
    {
        $listUsers = DB::select('SELECT * FROM users ORDER BY dateUpdate DESC');

        return $listUsers;
    }
}
