<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    protected $table        = 'tb_user';
    protected $primaryKey   = 'id';
    protected $fillable     = ['username', 'email', 'password', 'full_name', 'division', 'gender', 'company', 'image', 'role', 'created_at', 'updated_at'];

    function _getDivision()
    {
        $builder = DB::table($this->table)->select('division')->groupBy('division')->get()->toArray();
        return $builder;
    }
}
