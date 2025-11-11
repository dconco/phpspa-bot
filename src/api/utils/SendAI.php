<?php

use function Component\useFetch;

function SendAI($prompt) {
   $GEMINI_API_KEY = $_ENV["GEMINI_API_KEY"];
   $model = 'gemini-2.5-flash';
   // $imageContent = file_get_contents(__DIR__ . '/..')
   // $ss = base64_encode($imageContent)

   $payload = [
      "contents" => [
         "parts" => [
            // [
            //    "inline_data": [
            //       "mime_type": "image/jpeg",
            //       "data": $ss
            //    ]
            // ],
            ["text" => $prompt]
         ]
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