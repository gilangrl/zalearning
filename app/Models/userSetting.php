<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userSetting extends Model
{
    use HasFactory;
    protected $table = 'setting_users';
    protected $fillable =
    [
        'id_user',
        'gambar',
        'alamat',
        'bio',
        'tanggal_lahir',
        'pengalaman_kerja',
    ];
    protected $guarded=[];

    public function User()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
