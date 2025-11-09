<?php

use PhpSPA\App;
use PhpSPA\Compression\Compressor;

(new App(require 'layout/Layout.php'))
   ->attach(require 'pages/HomePage.php')
   ->attach(require 'pages/AboutPage.php')

   ->compression(Compressor::LEVEL_AGGRESSIVE)

   ->defaultTargetID('app')
   ->run();

// --- NO ROUTES FOUND ---
echo '404 Not Found';