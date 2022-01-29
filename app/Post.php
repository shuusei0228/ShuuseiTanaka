<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
public function getByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'ASC')->limit($limit_count)->get();
    }
public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'ASC')->paginate($limit_count);
    }
    protected $fillable = [
    'title',
    'body',
    ];
}