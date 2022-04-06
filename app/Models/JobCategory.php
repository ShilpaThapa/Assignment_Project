<?php

namespace App\Models;

use App\Http\Traits\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobCategory extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;
    protected $table='job_categories';
    protected $sluggable='name';
    protected $fillable=['name','slug'];
}
