<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function submit(Request $request) {
        return view("invoice");
    }
    public function index(Request $request) {
        return view("generate_invoice");
    }
}
