<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primarykey = 'Id';
    public $timestamps = false;
    public $fillable = [
        'name','email','pass','addres','phone','TTL'

    ];
}
