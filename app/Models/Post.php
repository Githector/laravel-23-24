<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Image\Manipulations;

class Post extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'post',
        'user_id'
    ];

    public static function last(){
        return static::all()->last();
    }

    // public function registerMediaCollections(): void
    // {
    //     $this->addMediaCollection('images')
    //         ->useDisk('media2')  //Guarda las imagenes en la carpeta media/profiles
    //         //->singleFile()
    //         ;
    // }

    public function registerMediaConversions(?Media $media = null): void
    {
        // $this->addMediaConversion('thumb')
        //     ->width(300)
        //     ->height(300)
        //     ;

            // $this->addMediaConversion('thumb2')
            // ->nonOptimized()
            // ->width(300)
            // ->height(300)
            // ;

            // $this->addMediaConversion('two')
            // ->width(200)
            // ->height(200)
            // ->sepia()
            // //->sharpen(10)
            // //->nonQueued()
            // ;

             $this->addMediaConversion('three')
             ->crop('crop-center', 400, 400);

            // $this->addMediaConversion('four')
            // ->fit(Manipulations::FIT_CROP, 400, 400)
            // ->pixelate(2)
            // ->width(400)
            // ->height(400);
            
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function checkLike(User $user){
        return $this->likes->contains('user_id',$user->id);
    }

    public function numLikes(){
        return $this->likes->count();
    }
 
}
