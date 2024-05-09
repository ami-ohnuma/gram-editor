<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Storage;

class CheckContentController extends Controller
{
    protected $gram_template;

    public function __construct()
    {
    }

    public function index(Request $request)
    {
        $data = $request->content;

        $directoryPath = 'gram/' . $request->customer_id;
        // storage/app/gram/customer_id/以下にgramファイル作成
        if (!Storage::exists($directoryPath)) {
            Storage::makeDirectory($directoryPath);
        }
        $directoryFilePath = $directoryPath . '/basic.gram';
        Storage::put($directoryFilePath, $data);
        $filePath = Storage::path($directoryFilePath);

        $userAgent = $request->header('User-Agent');        
        if (strpos($userAgent, 'Windows') !== false) {
            $exePath = base_path('gchk.exe');
        } else {
            $exePath = base_path('gchk');
        }

        $process = new Process([$exePath, $filePath]);
        $process->run();

        $output = $process->getOutput();

        return response()->json($output);
    }
}
