<?php

use PhpSPA\Http\Router;

Router::get("/health", function () {
   return response()->success('API Running', 'Health is OK!');
});

Router::get("/prompt", require 'api/controller/AIPromptController.php');
