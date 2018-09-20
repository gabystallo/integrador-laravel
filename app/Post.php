<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['titulo', 'bajada', 'texto'];

    public function autor()
    {
    	return $this->belongsTo(User::class, 'id_user');
    }
}
