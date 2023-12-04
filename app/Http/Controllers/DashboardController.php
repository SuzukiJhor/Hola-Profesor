<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    public function __invoke()
    {

        return View::make('dashboard', ['questions' => Question::all()]);
    }
}
