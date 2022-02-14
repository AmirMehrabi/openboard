<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>چگونه از تخته آزاد استفاده کنیم</title>

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
                        <h2 class="font-semibold md:text-lg">چگونه از تخته آزاد استفاده کنیم؟</h2>

                        <p>
                            تنها چیزی که باید برای تخته آزاد فراهم کنید، «محتوا» است. تخته آزاد باقی کارها را انجام می‌دهد. با این حال، گزینه‌های دیگری هم برای استفاده از تخته آزاد فراهم است: 
                        </p>

                        <br><hr><br>

                        <h4 class="md:font-semibold">آدرس صفحه:</h4>
                        <p>
                            آدرسی که بعد از «openboard.ir/»قرار می‌گیرد. به عنوان مثال: «openboard.ir/first-page». در حال حاضر فقط حروف الفبا «a-z»، اعداد «1-9» و خط فاصله پذیرفته می‌شود و مقدار ورودی نباید از قبل برای صفحه دیگری ثبت شده باشد. اگر این مقدار را خالی بگذارید به صورت اتوماتیک توسط تخته آزاد پر خواهد شد. 
                        </p><br>

                        <h4 class="md:font-semibold">کد ویرایش:</h4>
                        <p>
                            تخته آزاد یک کد تصادفی ایجاد می‌کند و در اختیار شما می‌گذارد، اما امکان تغییرش توسط خودتان وجود دارد. از این کد برای ویرایش صفحه‌تان استفاده خواهد شد و در صورت از دست دادنش امکان بازیابی آن وجود ندارد.
                        </p><br>

                        <h4 class="md:font-semibold">عنوان صفحه:</h4>
                        <p>
                            به صفحه خود یک عنوان اختصاص دهید تا در هنگام به اشتراک گذاری آن در شبکه‌های اجتماعی پیش‌نمایش آن به شکل قابل قبولی ایجاد شود.
                        </p><br>

                        <h4 class="md:font-semibold">نویسنده:</h4>
                        <p>
                            بگذارید مردم بدانند چه کسی ایجادکننده این صفحه بوده. مقدار وارد شده در موتورهای جستجوگر و پست‌های شبکه‌های اجتماعی نمایش داده خواهد شد. آدرس هندل توییتر در این فیلد پیش‌نمایش جالبی ایجاد می‌کند.
                        </p><br>

                        <h4 class="md:font-semibold">خلاصه:</h4>
                        <p>
                            یک خلاصه کوتاه ۲۰۰ کارکتری که در کارت توییتر و نتایج موتورهای جستجوگر نمایش داده می‌شود. اگر این مقدار را خالی بگذارید تخته آزاد به صورت اتوماتیک از ۲۰۰ کارکتر اول صفحه به عنوان توضیحات استفاده می‌کند.
                        </p><br>


                        <br><br>

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
