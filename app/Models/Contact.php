<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    public $fillable = ['name', 'email', 'subject', 'message'];

    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot()
    {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "santosoagatha28@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
