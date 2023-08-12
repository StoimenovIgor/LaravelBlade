<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\HireStudentMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\HireStudentRequest;

class MailController extends Controller
{
    public function hireStudent(HireStudentRequest $request)
    {
        Mail::to('i_delev@yahoo.com')
            ->send(new HireStudentMail($request->validated()));

        return view('pages.email')->with('success_email',
            'Успешно испратен емаил, очекувајте наш одговор'
        );
    }
}
