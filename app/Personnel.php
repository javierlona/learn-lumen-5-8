<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
  protected $table = 'personnels';
  protected $primaryKey = 'id';
  public $timestamps = true;

  /*
  * The attributes that aren't mass assignable.
  * You should use either $fillable or $guarded - not both.
  * If you would like to make all attributes mass assignable, you define
  * the $guarded property as an empty array:
  */
  protected $guarded = [];
  
}