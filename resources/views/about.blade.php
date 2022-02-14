<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>درباره تخته آزاد</title>

    <!-- Fonts -->
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="antialiased dark:bg-gray-900">
    <div class="relative flex items-top justify-center min-h-screen dark:bg-gray-900 sm:items-center py-4 sm:pt-0">


        <div class="w-full md:w-5/6 lg:w-4/6 mx-auto sm:px-6 lg:px-8">
            <div class="p-6 mt-8 w-full bg-white dark:bg-gray-800 overflow-hidden">
                <div class="mt-2 text-gray-900 dark:text-gray-400">
                    <h1 class="font-bold text-lg md:text-2xl">تخته آزاد</h1>

                    <div class="py-6">
                        <h2 class="font-semibold md:text-lg">درباره تخته آزاد</h2>

                        <p>
                            ما معتقدیم که همه باید به آسانی به صفحات وب دسترسی داشته باشند. اما صفحات پر زرق و برق، شلوغ و سنگین این امر را برای برخی ناممکن کرده. از آن گذشته، بسیاری از این صفحات شلوغ برای افرادی که با چالش‌های مختلف، مانند نابینایی یا کم‌بینایی دست و پنجه نرم می‌کنند مناسب‌سازی نشده‌اند. هدف من از راه‌اندازی تخته آزاد این است که تمامی افراد بتوانند افکار خود را روی اینترنت نشر دهند. با تخته آزاد، همه می‌توانند با هر دستگاهی که دارند ناشر افکار خود باشند. 
                        </p>
                        <br>
                        <p>
                            تخته آزاد از <a class="underline" href="http://txti.es/">txti</a> الهام گرفته شده و توسط آموری برای شهروندان فارسی‌زبان توسعه‌داده شده. 
                        </p>

                        <br><br>

                        <h4 class="font-bold">از اینکه از تخته آزاد استفاده می‌کنید از شما ممنونیم.</h4>
                    </div>

                    <div class="flex justify-end">
                        <a class="underline" href="{{ route('home') }}">صفحه نخست</a>
                    </div>
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
