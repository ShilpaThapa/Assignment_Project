<?php

namespace App\Models;

use App\Http\Traits\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jobseeker extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;
    protected $fillable=['fullname','slug','address','phone_no','gender','dateofbirth','nationality'];
    protected $sluggable='fullname';
}
