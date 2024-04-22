<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GramTemplate;

class HomeController extends Controller
{
    protected $gram_template;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(GramTemplate $gram_template)
    {
        $this->middleware('auth');
        $this->gram_template = $gram_template;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $gram_templates = $this->gram_template->getName();
        return view('home', ['gram_templates' => $gram_templates]);
    }
}
