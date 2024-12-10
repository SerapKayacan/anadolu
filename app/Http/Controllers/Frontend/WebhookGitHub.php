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
        $output = shell_exec('cd '.$folder.' && git pull 2>&1');
        dd($output);
//        test
        $signature = $request->header('X-Hub-Signature-256');
        $payload = $request->getContent();
        $secret = env('GITHUB_WEBHOOK_SECRET');
        $computedSignature = 'sha256=' . hash_hmac('sha256', $payload, $secret);

        if (!hash_equals($computedSignature, $signature)) {
            abort(403, 'Invalid signature');
        }

        $data = json_decode($payload, true);
        if (isset($data['ref']) && $data['ref'] === 'refs/heads/master') {
            $output = shell_exec('cd /home/osman.ustalar@perakende.medya.local/public_html/sultan-park && git pull 2>&1');

            dd($output);
            Log::info('Git pull output:', [$output]);
        }

        return response()->json(['message' => 'Webhook handled successfully']);
    }
}
