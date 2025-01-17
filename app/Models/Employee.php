<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'nama_lengkap',
        'role',
    ];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
