<?php

namespace App\Http\Controllers;

use App\Events\ActionEvent;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function testEvent()
    {
        $actionId = 'score_update';
        $actionData = ['team1_score' => 25];

        event(new ActionEvent($actionId, $actionData));
    }
}
