<?php

namespace App;

use  Carbon\Carbon;

class Post extends Model
{
    protected $fillable =['title','body'];
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));

    }
    public function scopeFilter($query, $filters) // filter for sidebar navigation
    {
        if (isset($filters['month'])) {
            $query->whereMonth('created_at', Carbon::parse($filters['month'])->month);
        }
        if (isset($filters['year'])) {
            $query->whereYear('created_at', $filters['year']);
        }
    }
        public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupby('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }

}
