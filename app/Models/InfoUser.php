<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InfoUser extends Model
{
    use HasFactory;

    protected $table = 'info_users';

    protected $fillable = [
        'username',
        'lulusan',
        'jurusan',
        'user_id',
        'about',
        'email',
        'addres',
        'slug',
        'imag'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pengalamanuser()
    {
        return $this->hasMany(PengalamanUser::class);
    }
}
