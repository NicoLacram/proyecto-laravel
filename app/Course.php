<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $primaryKey = "id";
    public $timestamps = true;
    protected $guarded =[];
    protected $fillable = [
        'name','description','category_id','level_id', 'price', 'length','image'
    ];
    protected $dates = ['created_at'];


    public function scopeRandomize($query, $limit = 3, $exclude = [])
    {
        $query = $query->whereRaw('RAND()< (SELECT ((?/COUNT(*))*10) FROM `courses`)', [$limit])->orderByRaw('RAND()')->limit($limit);
        if (!empty($exclude)) {
             $query = $query->whereNotIn('id', $exclude);
             } return $query;
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function level(){
        return $this->belongsTo('App\Level');
    }

}
