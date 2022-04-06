<?php

namespace App\Models;

use App\Http\Traits\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobPost extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;
    protected $table='job_posts';
    protected $sluggable='title';
    protected $fillable=['job_category_id','company_id','title','slug','description',
    'no_of_vacancies','job_level','job_type','offered_salary','deadline','status'];

}
