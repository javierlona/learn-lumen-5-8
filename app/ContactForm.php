<?php

namespace APP;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
  protected $table = 'contact_form';
  protected $primaryKey = 'id';
  public $timestamps = true;

  /*
  * Explicitly state which fields are writeable
  *
  */

  protected $fillable = [
    'name',
    'email',
    'message',
  ];

  /*
  * The attributes that aren't mass assignable.
  * You should use either $fillable or $guarded - not both.
  * If you would like to make all attributes mass assignable, you define
  * the $guarded property as an empty array:
  */
  // protected $guarded = [];
  
}