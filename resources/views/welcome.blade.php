<!DOCTYPE html>
<html x-data="data" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ithelper</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Scripts -->
    <script src="{{ asset('js/init-alpine.js') }}"></script>
</head>
<body class="">

<div class="grid grid-flow-col">
    <div class="py-20 px-36">
        <div class="flex space-x-3">
            <img src="{{ asset('images/ithelper.jpg') }}" alt="trackpro" width="13%" height="4%">
            <h2 class="mt-6 text-lg sm:text-xl">
                IDCZ IT ticket support system</h2>
            <h2 class="text-lg sm:text-xl">
            
        </div>
        <div class="mt-16 space-y-3">
          <h1 class="w-7/12 font-medium text-teal-800 text-7xl">
              Solve All your IT problems without leaving the comfort of your Office
          </h1>
        </div>
        <div class="mt-5 text-gray-500">
            <h2 class="mt-6 text-lg sm:text-xl">
                Simplify your work and boost team efficiency with our it helpdesk system</h2>
            <h2 class="text-lg sm:text-xl">
                management tool.</h2>
        </div>

        <div class="flex mt-8 space-x-7">
            <a href="{{ route('register') }}">
                <button
                        class="w-40 h-12 py-1 text-xl text-white bg-teal-800 rounded-sm hover:bg-gray-400 hover:text-white peer-aria-checked:">
                    Get Started
                </button>
            </a>

        </div>



    </div>

</div>



</body>
</html>
