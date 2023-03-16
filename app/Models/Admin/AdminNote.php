<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminNote extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
