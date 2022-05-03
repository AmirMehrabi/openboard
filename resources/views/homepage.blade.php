<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The most minimalist content management system for Persian users.">

    <title>تخته آزاد</title>

    <!-- Fonts -->
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script>
        if (localStorage.getItem('color-theme') === 'dark' ||(!('color-theme' in localStorage) &&window.matchMedia('(prefers-color-scheme: dark)').matches)) {document.documentElement.classList.add('dark');} else {document.documentElement.classList.remove('dark');}
    </script>
</head>

<body class="antialiased dark:bg-slate-900">
    <button aria-label="Dark / Light mode toggle button"
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

                    <div class="flex gap-4 my-6">
                        <a href="{{ route('about') }}" class="underline hover:text-slate-700 dark:hover:text-slate-100">درباره تخته آزاد</a>
                        <a href="{{ route('howTo') }}" class="underline hover:text-slate-700 dark:hover:text-slate-100 ">چگونگی استفاده</a>
                    </div>

                    <h2 class="font-bold mb-4 text-lg md:text-xl">
                        
                        {{ $post->exists ? 'ویرایش صفحه' : 'ایجاد یک صفحه جدید' }}

                    </h2>


                    @if(!$post->exists)
                    <form action="{{ route('post.store') }}" method="post">
                @else
                <form action="{{ route('post.update', $post->slug) }}" method="post">
                    {!! method_field('patch') !!}
                @endif
                    
                        @csrf
                    <div class="md:flex md:flex-col md:items-start mb-3">
                        <div class="w-full">
                            <label class="block text-black font-bold md:text-right mb-1 dark:text-slate-200" for="content">
                                محتوا
                            </label>
                        </div>
                        <div class="w-full">
                            <textarea name="content"
                                class="bg-slate-100 appearance-none border-2 border-slate-300 rounded w-full py-2 px-4 text-slate-700 leading-tight focus:outline-none focus:bg-white focus:border-slate-500"
                                id="" cols="80" rows="10">{{ old('content', $post->content) }}</textarea>
                                @error('content')
                                <div class="text-red-700 underline alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div id="advanced" class="{{ $post->exists ? ' ' : 'hidden' }} ">
                        <h3 class="font-bold mb-4 text-base md:text-lg">تنظیمات پیشرفته</h3>

                        <div class="md:flex md:flex-col md:items-start mb-3">
                            <div class="w-full">
                                <label class="block text-black font-bold md:text-right mb-1 dark:text-slate-200" for="slug">
                                    آدرس صفحه (حروف، اعداد، خط فاصله قابل قبول است و بعد از openboard.ir/ قرار می‌گیرد)
                                </label>
                            </div>
                            <div class="w-full">
                                <input name="slug"
                                value="{{ old('slug', $post->slug) }}"
                                    class=" bg-slate-100 appearance-none border-2 border-slate-300 rounded w-full py-2 px-4 text-slate-700 leading-tight focus:outline-none focus:bg-white focus:border-slate-500"
                                    id="" />
                                    @error('slug')
                                    <div class="text-red-700 underline alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="md:flex md:flex-col md:items-start mb-3">
                            <div class="w-full">
                                <label class="block text-black font-bold md:text-right mb-1 dark:text-slate-200" for="code">
                                    کد ویرایش (برای ویرایش صفحه لازم خواهد بود)
                                </label>
                            </div>
                            <div class="w-full">
                                <input name="code"
                                    class="bg-slate-100 appearance-none border-2 border-slate-300 rounded w-full py-2 px-4 text-slate-700 leading-tight focus:outline-none focus:bg-white focus:border-slate-500"
                                    id="" />
                            </div>
                        </div>

                        <div class="md:flex md:flex-col md:items-start mb-3">
                            <div class="w-full">
                                <label class="block text-black font-bold md:text-right mb-1 dark:text-slate-200" for="title">
                                    عنوان صفحه
                                </label>
                            </div>
                            <div class="w-full">
                                <input name="title"
                                value="{{ old('title', $post->title) }}"
                                    class="bg-slate-100 appearance-none border-2 border-slate-300 rounded w-full py-2 px-4 text-slate-700 leading-tight focus:outline-none focus:bg-white focus:border-slate-500"
                                    id="" />
                            </div>
                        </div>

                        <div class="md:flex md:flex-col md:items-start mb-3">
                            <div class="w-full">
                                <label class="block text-black font-bold md:text-right mb-1 dark:text-slate-200" for="author_name">
                                    نویسنده
                                </label>
                            </div>
                            <div class="w-full">
                                <input name="author_name"
                                value="{{ old('author_name', $post->author_name) }}"
                                    class="bg-slate-100 appearance-none border-2 border-slate-300 rounded w-full py-2 px-4 text-slate-700 leading-tight focus:outline-none focus:bg-white focus:border-slate-500"
                                    id="" />
                            </div>
                        </div>

                        <div class="md:flex md:flex-col md:items-start mb-3">
                            <div class="w-full">
                                <label class="block text-black font-bold md:text-right mb-1 dark:text-slate-200" for="description">
                                    خلاصه
                                </label>
                            </div>
                            <div class="w-full">
                                <textarea name="description"
                                    class="bg-slate-100 appearance-none border-2 border-slate-300 rounded w-full py-2 px-4 text-slate-700 leading-tight focus:outline-none focus:bg-white focus:border-slate-500"
                                    id="description" cols="80" rows="5">{{ old('description', $post->description) }}</textarea>
                            </div>
                        </div>

                        @if($post->exists)
                        <div class="md:flex md:flex-col md:items-start mb-3">
                            <div class="w-full">
                                <label class="block text-black font-bold md:text-right mb-1 dark:text-slate-200" for="submitted_code">
                                    کد ویرایش صفحه
                                </label>
                            </div>
                            <div class="w-full">
                                <input name="submitted_code"
                                value="{{ old('submitted_code', $post->submitted_code) }}"
                                    class="bg-slate-100 appearance-none border-2 border-slate-300 rounded w-full py-2 px-4 text-slate-700 leading-tight focus:outline-none focus:bg-white focus:border-slate-500"
                                    id="" />
                                    @error('submitted_code')
                                    <div class="text-red-700 underline alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        @endif
                    </div>

                    <div class="flex gap-4 justify-end">
                        <button aria-label="Show advanced settings button" onclick="advancedButton()"
                            class="shadow bg-slate-700 text-sm hover:bg-slate-900 focus:shadow-outline focus:outline-none text-white font-bold py-1 px-2 rounded"
                            type="button">
                            تنظیمات پیشرفته
                        </button>
                        <button
                            class="shadow bg-slate-700 text-sm hover:bg-slate-900 focus:shadow-outline focus:outline-none text-white font-bold py-1 px-2 rounded"
                            type="submit">
                            ذخیره
                        </button>
                    </div>
                </form>
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
