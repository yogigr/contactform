<?php

namespace Littlebyte\Contactform\Models;

use Illuminate\Database\Eloquent\Model;


class ContactForm extends Model
{
	protected $fillable = ['name', 'email', 'message'];
	protected $table = 'contacts';
}