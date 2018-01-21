<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Events extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'events';
	protected $primaryKey = 'ID';
	public    $timestamps = false;
	protected $fillable = ["EventName","published_at","organizerID"];
	protected $dates = ["published_at"];
	/* Mutator */
	public function setPublishedAtAttribute($input){
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$input);
	}
	/* Accessor */
	public function getPublishedAtAttribute($value){
		return Carbon::parse($value)->diffForHumans();
	}
	/* scope */
	public function scopePublished($query){
		//$query->where('published_at','<=',Carbon::now());
	}
	/**
	* User can have many events -methodname = ModelName
	*/	
	public function user(){
		return $this->belongsTo('App\User');
	}
}
