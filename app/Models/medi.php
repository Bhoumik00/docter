<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medi extends Model
{
    public function index(){
        return view('folder.home');
    }

    public function book(){
        return view('folder.book');
    }

    public function docter(){
        return view('folder.docter');
    }

    public function make(){
        return view('folder.make');
    }

    public function fever(){
        return view('folder.fever');
    }
}
