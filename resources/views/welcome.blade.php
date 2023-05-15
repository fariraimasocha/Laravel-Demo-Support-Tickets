<!DOCTYPE html>
<html x-data="data" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Scripts -->
    <script src="{{ asset('js/init-alpine.js') }}"></script>
</head>
<body class="">

<div class="grid grid-flow-col">
    <div class="px-36 py-20">
        <div class="">
            <img src="{{ asset('images/ithelper.png') }}" alt="trackpro" width="4%" height="4%">
        </div>
        <div class="mt-16 space-y-3">
          <h1 class="font-medium text-7xl w-7/12 text-teal-800">
              Solve All your IT problems without leaving the comfort of your Office
          </h1>
        </div>
        <div class="mt-5  text-gray-500">
            <h2 class="mt-6 text-lg sm:text-xl">
                Simplify your work and boost team efficiency with our it helpdesk system</h2>
            <h2 class="text-lg sm:text-xl">
                management tool.</h2>
        </div>

        <div class="flex space-x-7 mt-8">
            <a href="{{ route('register') }}">
                <button
                        class="bg-teal-800 text-white text-xl rounded-sm w-40 h-12 hover:bg-gray-400 hover:text-white peer-aria-checked: py-1">
                    Get Started
                </button>
            </a>

        </div>



    </div>

</div>



</body>
</html>
