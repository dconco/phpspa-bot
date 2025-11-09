<?php

use PhpSPA\Component;

use function Component\useState;

return (new Component(function() {
   $counter = useState('counter', 1);

   return <<<HTML
      <div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100">
         <div class="container mx-auto px-4 py-20">
            <div class="text-center">
               <h1 class="text-6xl font-bold text-gray-900 mb-6">
                  Php<span class="text-blue-600">SPA</span>
               </h1>
               <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                  A simple, fast PhpSPA single-page application template
               </p>
               <div class="space-x-4">
                  <Component.Link to="/about" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                     Get Started
                  </Component.Link>
                  <a href="https://github.com/dconco/phpspa" class="bg-gray-100 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-200 transition-colors">
                     Documentation
                  </a>
               </div>
            </div>

            <div class="mt-20 grid md:grid-cols-4 gap-8">
               <div class="bg-white p-6 rounded-lg shadow-sm">
                  <div class="text-3xl mb-4">⚡</div>
                  <h3 class="text-lg font-semibold mb-2">Fast</h3>
                  <p class="text-gray-600">Lightweight and optimized for performance with minimal overhead and instant page loads</p>
               </div>
               
               <div class="bg-white p-6 rounded-lg shadow-sm">
                  <div class="text-3xl mb-4">🎯</div>
                  <h3 class="text-lg font-semibold mb-2">Simple</h3>
                  <p class="text-gray-600">Easy to understand and customize with clean code structure and intuitive components</p>
               </div>
               
               <div class="bg-white p-6 rounded-lg shadow-sm">
                  <div class="text-3xl mb-4">📱</div>
                  <h3 class="text-lg font-semibold mb-2">Responsive</h3>
                  <p class="text-gray-600">Works great on all devices with mobile-first design and flexible layouts</p>
               </div>

               <!-- Counter Demo Card -->
               <div class="bg-white p-6 rounded-lg shadow-sm">
                  <div class="text-3xl mb-4 text-center">🔢</div>
                  <h3 class="text-lg font-semibold mb-4 text-center">Counter Demo</h3>
                  <div class="text-center">
                     <div class="text-3xl font-bold text-blue-600 mb-4" id="counter">{$counter}</div>
                     <div class="space-x-2">
                        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm transition-colors" onclick="setState('counter', $counter - 1)">
                           ➖ Decrease
                        </button>
                        <button class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded text-sm transition-colors" onclick="setState('counter', $counter + 1)">
                           ➕ Increase
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   HTML;
}))
->route('/')
->title('PhpSPA Template');
