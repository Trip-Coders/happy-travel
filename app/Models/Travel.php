<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{

    use HasFactory;

    protected $table = 'destinations';
    protected $fillable = ['image', 'title', 'location', 'content', 'user_id'];
    protected $hidden = ['created_at', 'updated_at'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
