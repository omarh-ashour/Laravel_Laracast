<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listings';
    protected $fillable = ['employer_id', 'title', 'salary', 'location','description'];
    public function Employer()
    {
        return $this->belongsTo(Employer::class);
    }
    public function tags()
    {
        return $this->belongsToMany(tag::class, foreignPivotKey:"job_listing_id");
    }
}
