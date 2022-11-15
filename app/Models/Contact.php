<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'mail_from', 'mail_to', 'phone_number', 'subject', 'message'];

    public static function  boot() {
        
        parent::boot();

        static::created(function ($item) {

            $adminEmail = $item['mail_to'];
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
