<?php

namespace App\Models;

use App\Http\Traits\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;
    protected $sluggable='company_name';
    protected $fillable=['user_id','company_name','official_email','slug','about','location','phone_no','gender','no_of_employees'];
}
