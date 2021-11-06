<?php

namespace App\Http\Controllers;
use Storage;
use File;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function create_folder(){

    }
    public function create_document(){
        Storage::disk('google')->put('test.txt','Đạt đẹp trai');
        dd('Đã tạo');
    }
}
