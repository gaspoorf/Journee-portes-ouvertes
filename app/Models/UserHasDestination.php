<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UserHasDestination extends Model
{
    protected $table = 'user_has_destination';
    protected $fillable = ['user_id', 'destination_id'];
    
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function destinations()
    {
        return $this->belongsTo(Destination::class, 'destination_id');
    }
}
