<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer_message;
use Illuminate\Support\Facades\Validator;

class ContactusController extends Controller
{
    //
    public function listAll(){
        return view('admin.contactus.list_all');
    }
}
