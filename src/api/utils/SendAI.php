<?php

use function Component\useFetch;

function SendAI($prompt) {
   $GEMINI_API_KEY = $_ENV["GEMINI_API_KEY"];
   $model = 'gemini-2.5-flash';

   $payload = [
      "contents" => [
         "parts" => ["text" => $prompt]
      ]
   ];

   $response = useFetch("https://generativelanguage.googleapis.com/v1beta/models/$model:generateContent")
                  ->headers(["x-goog-api-key" => $GEMINI_API_KEY])
                  ->post($payload);

   if ($response->ok()) {
      $result = $response->json();
      $ai_response = $result['candidates'][0]['content']['parts'][0]['text'];
      return $ai_response;
   }
}