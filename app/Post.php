<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use Notifiable;

    protected $table = 'requests';

    protected $fillable = ['item_name', 'item_description', 'country', 'quantity', 'price'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
