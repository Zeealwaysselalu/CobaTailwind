<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengalamanUser extends Model
{

    protected $table = 'pengalaman_users';

    protected $fillable = [
        'info_user_id',
        'posisi',
        'perusahaan',
        'waktu',
        'deskripsi',
    ];
    public function infoUser()
    {
        return $this->belongsTo(InfoUser::class);
    }
}
