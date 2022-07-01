<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = ['dashboard_id', 'exam_Name', 'exam_Grade'];

    public function dashboard()
    {
        return $this->belongsTo(Dashboard::class);
    }
}
