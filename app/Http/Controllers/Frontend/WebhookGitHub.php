<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebhookGitHub extends Controller
{
    public function handle(Request $request)
    {
        $folder = env('PROJECT_FOLDER');

        $signature = $request->header('X-Hub-Signature-256');
        $payload = $request->getContent();
        $secret = env('GITHUB_WEBHOOK_SECRET');
        $computedSignature = 'sha256=' . hash_hmac('sha256', $payload, $secret);

        if (!hash_equals($computedSignature, $signature)) {
//            Log::error('Git pull output hatası:', [$computedSignature]);
            abort(403, 'Invalid signature');
        }

        $data = json_decode($payload, true);
        if (isset($data['ref']) && $data['ref'] === 'refs/heads/master') {
            $output = shell_exec('cd '.$folder.' && git pull 2>&1');
//            Log::info('Git pull output:', [$output]);
            return response()->json(['message' => $output]);
        } else {
//            Log::warning('Gereksiz branch push oldu' , $data);
            return response()->json(['message' => 'Geçersiz Branch']);
        }

    }
}
