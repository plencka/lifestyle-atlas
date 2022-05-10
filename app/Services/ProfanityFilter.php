<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class ProfanityFilter
{
    const API_URL = 'https://api.moderatecontent.com/text/?';

    public function __construct()
    {
        $this->request = Http::withHeaders([
            'User-Agent' => env('APP_NAME', 'Lifestyle.Atlas'),
            'Accept' => 'application/json'
        ]);
        $this->APIKey = env('MODERATECONTENT_API_KEY');
    }

    public function getFilteredText(string $text)
    {
        $response = $this->request->get(self::API_URL, [
            'key' => $this->APIKey,
            'msg' => $text,
        ]);

        return $response['clean'];
    }
}
