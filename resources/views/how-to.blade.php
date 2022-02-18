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

    <script>
        if (localStorage.getItem('color-theme') === 'dark' ||(!('color-theme' in localStorage) &&window.matchMedia('(prefers-color-scheme: dark)').matches)) {document.documentElement.classList.add('dark');} else {document.documentElement.classList.remove('dark');}
    </script>
</head>

<body class="antialiased dark:bg-slate-900">
    <button
    id="theme-toggle"
    type="button"
    class="text-slate-500  dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700 focus:outline-none focus:ring-4 focus:ring-slate-200 dark:focus:ring-slate-700 rounded-lg text-sm p-2 m-4"
  >
    <svg
      id="theme-toggle-dark-icon"
      class="w-5 h-5 hidden"
      fill="currentColor"
      viewBox="0 0 20 20"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
      ></path>
    </svg>
    <svg
      id="theme-toggle-light-icon"
      class="w-5 h-5 hidden"
      fill="currentColor"
      viewBox="0 0 20 20"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
        fill-rule="evenodd"
        clip-rule="evenodd"
      ></path>
    </svg>
  </button>
    <div class="relative flex items-top justify-center min-h-screen dark:bg-slate-900 sm:items-center py-4 sm:pt-0">


        <div class="w-full md:w-5/6 lg:w-4/6 mx-auto sm:px-6 lg:px-8">
            <div class="p-6 mt-8 w-full bg-white dark:bg-slate-800 overflow-hidden">
                <div class="mt-2 text-slate-900  dark:text-slate-300">
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

    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
    
});
</script>

</html>
