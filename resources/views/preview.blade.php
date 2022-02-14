<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>تخته آزاد</title>

    <!-- Fonts -->
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="antialiased dark:bg-gray-900">
    <div class="relative flex items-top justify-center min-h-screen dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-black underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-black underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-black underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif




        <div class="w-full md:w-5/6 lg:w-4/6 mx-auto sm:px-6 lg:px-8">
            <div class="p-6 mt-8 w-full bg-white dark:bg-gray-800 overflow-hidden">
                <div class="mt-2 text-gray-900 dark:text-gray-400">
                    <h1 class="font-bold text-lg md:text-2xl">تخته آزاد</h1>

                    <div class="flex gap-4 my-6">
                        <a href="#" class="underline hover:text-gray-700">درباره تخته آزاد</a>
                        <a href="#" class="underline hover:text-gray-700">چگونگی استفاده</a>
                    </div>

                    <h2 class="font-bold mb-4 text-lg md:text-xl">صفحه شما حاضر است</h2>

                    <p>لطفا اطلاعات زیر را در جایی امن نگه دارید. دسترسی مجدد به این صفحه امکان‌پذیر نخواهد بود.</p>


                    <br><hr><br>

                    <p class="font-light py-1">کد ویرایش صفحه شما:
                        <span class="font-bold">{{ $code }}</span>
                    </p>

                    <p class="font-light py-1">آدرس صفحه
                        <a href="http://openboard.ir/{{ $slug }}" class="font-bold">http://openboard.ir/{{ $slug }}</a>
                    </p>

                    <p class="font-light py-1">آدرس بخش ویرایش
                        <a href="http://openboard.ir/{{ $slug }}/edit" class="font-bold">http://openboard.ir/{{ $slug }}/edit</a>
                    </p>
                    <br><hr><br>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    function advancedButton() {
        var element = document.getElementById("advanced");
        element.classList.toggle("hidden");
    }
</script>

</html>
