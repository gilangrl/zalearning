<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class videoMateri extends Model
{
    use HasFactory;
    protected $table = 'video_materis';
    protected $fillable=
    [
        'video_materi',
        'id_course',
        'judul_bab',
        'judul_quiz',
        'soal_quiz',
        'jawaban_1',
        'jawaban_2',
        'jawaban_3',
        'jawaban_4',
        'jawaban_benar',
        'sertifikat',
    ];

    public function course()
    {
        return $this->belongsTo(course::class, 'id_course', 'id');
    }

}
