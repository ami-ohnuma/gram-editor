<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \Symfony\Component\HttpFoundation\Response;

use App\Models\GramTemplate;

class GramTemplateController extends Controller
{
    protected $gram_template;

    public function __construct(GramTemplate $gram_template)
    {
        $this->gram_template = $gram_template;
    }
    
    public function detail(Request $request)
    {
        $data = $this->gram_template->getContent($request->id);
        return response()->json($data);
    }
}
