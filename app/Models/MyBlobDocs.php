<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyBlobDocs extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'myblobdocs';
    protected $guarded = ['id'];
}
