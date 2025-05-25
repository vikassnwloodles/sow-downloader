<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;

class SowController extends Controller
{
    public function index()
    {
        return view('welcome'); // or create your own Blade view
    }

    public function download()
    {
        $fastApiUrl = 'http://localhost:8000/download-sow';
        # $webhookSecret = config('services.fastapi.webhook_secret'); // e.g. in .env
        $webhookSecret = '7ztkuXXzKqebTOVWCdnAvmQ-qCLr9bqH4Lfuw_wmN_s';
    
        $uuid = '36a8d6f9-fcb3-40a8-8f94-6f8777d01627';  // You can generate or get this dynamically
    
        $response = Http::withHeaders([
            'X-Webhook-Secret' => $webhookSecret,
            'Accept' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', // optional but recommended
        ])->post($fastApiUrl, [
            'uuid' => $uuid,
        ]);
    
        if ($response->successful()) {
            return Response::make($response->body(), 200, [
                'Content-Type' => $response->header('Content-Type'),
                'Content-Disposition' => $response->header('Content-Disposition'),
            ]);
        }
    
        return abort(500, 'Failed to download SOW document');
    }
}
