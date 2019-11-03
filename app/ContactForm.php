<?php

namespace APP;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
  protected $table = 'contact_form';
  protected $primaryKey = 'id';
  public $timestamps = true;

  protected $fillable = [
    'name',
    'email',
    'message',
  ];
  
}