<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class study extends Model
{
    use HasFactory;


    protected $fillable = ['course','pdf'];

    // public function __construct() {
    //     // dd("called");
    //     echo "<pre>";
    //     print_r($_FILES);
    //     dd("dd");
    // }

}
