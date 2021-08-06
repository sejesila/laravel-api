<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail(int $id)
 * @method static paginate(int $int)
 * @property mixed title
 * @property mixed body
 */
class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title','body'];
}
