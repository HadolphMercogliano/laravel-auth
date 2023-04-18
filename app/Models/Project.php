<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'description', 'link'];
     public function getAbstract($max = 40) {
      return substr($this->description, 0 , $max) . '...';
    }
}