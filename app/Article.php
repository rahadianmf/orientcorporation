<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
    	'title',
    	'body',
    	'published_at',
        'user_id'
    ];

    protected $dates = ["published_at"]; //buat ubah published_at jadi carbon format kyk created_at & updated_at

    public function setPublishedAtAttribute($date) {
    	// $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date); //kl pake ini, kl ada artikel yang di post nanti tetep ada jem,menit&detiknya padahal harusnya midnight
        if($date > Carbon::now()) {
    	    $this->attributes['published_at'] = Carbon::parse($date); //parse ke jem, menit & detik 00:00:00 krn $date isinya cm tanggal
        } else {
            $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
        }
    }

    public function scopePublished($query) {
    	$query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query) {
    	$query->where('published_at', '>', Carbon::now());
    }

    public function user() {
        $this->belongsTo('App\User');
    }
}
