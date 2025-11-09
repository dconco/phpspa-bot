<?php

use PhpSPA\Http\Request;

require_once "api/utils/SendAI.php";

return function(Request $request) {
   $prompt = $request("text");
   if (!$prompt) response()->sendError('Invalid Request', 400);
   
   $ai_response = SendAI($prompt);
   response()->sendSuccess($ai_response);
};