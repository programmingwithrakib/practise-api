<?php

namespace App\Models;

use App\Utils\ModelHelperTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory, ModelHelperTrait;
    protected $guarded = [];

    protected $hidden = ['created_at', 'updated_at'];
}
