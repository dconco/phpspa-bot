<?php 

return fn() => <<<HTML
   <!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="dist/tailwind.css">
   </head>
   <body class="bg-gray-50">
      <nav class="bg-white shadow-sm">
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
               <div class="flex items-center">
                  <h1 class="text-xl font-semibold">PhpSPA</h1>
               </div>
               <div class="flex items-center space-x-4">
                  <Component.Link to="/" children="Home" class="text-gray-700 hover:text-blue-600" />
                  <Component.Link to="/about" children="About" class="text-gray-700 hover:text-blue-600" />
               </div>
            </div>
         </div>
      </nav>

      <div id="app"></div>

   </body>
   </html>
HTML;
