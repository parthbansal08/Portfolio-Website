<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlide extends Model
{
    use HasFactory;

    protected $guarded = [];
    //Iske jagah protected guarded use kar sakte hai, same meaning hai iska bhi
    // protected $fillable = [
    //     'title',
    //     'ahort_title',
    //     'home_slide',
    //     'video_url',
    // ];
}
