<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'employer_id',
        'title',
        'salary',
        'location',
        'schedule',
        'url',
        'featured',
    ];

    public function employer () {
        return $this->belongsTo(Employer::class);
    }

    public function tags () {
        return $this->belongsToMany(Tag::class, 'job_tags');
    }

    public function tag(string $name) : void {
        $tag = Tag::firstOrCreate(['name' => $name]);

        $this->tags()->attach($tag);
    }
}
