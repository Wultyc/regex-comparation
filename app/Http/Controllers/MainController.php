<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Show tests homepage
     */
    public function index(Request $request)
    {
        return view('welcome');
    }

    /**
     * Show Raw DB Select page
     */
    public function dbSelect(Request $request)
    {
        $result = "";
        return view('welcome')->with(compact(['result']));
    }

    /**
     * Show Raw DB Select With Limit page
     */
    public function dbSelectWithLimit(Request $request)
    {
        $result = "";
        return view('welcome')->with(compact(['result']));
    }

    /**
     * Show PHP processed page
     */
    public function phpSearch(Request $request)
    {
        $result = "";
        return view('welcome')->with(compact(['result']));
    }

    /**
     * Show PHP processed page with stop page
     */
    public function phpSearchWithStop(Request $request)
    {
        $result = "";
        return view('welcome')->with(compact(['result']));
    }
}
