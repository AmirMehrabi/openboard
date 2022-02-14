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



        <div class="w-full md:w-5/6 lg:w-4/6 mx-auto sm:px-6 lg:px-8">
            <div class="p-6 mt-8 w-full bg-white dark:bg-gray-800 overflow-hidden">
                <div class="mt-2 text-gray-900 dark:text-gray-400">
                    <h1 class="font-bold text-lg md:text-2xl">تخته آزاد</h1>

                    <div class="flex gap-4 my-6">
                        <a href="{{ route('about') }}" class="underline hover:text-gray-700">درباره تخته آزاد</a>
                        <a href="{{ route('howTo') }}" class="underline hover:text-gray-700">چگونگی استفاده</a>
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
                            <label class="block text-black font-bold md:text-right mb-1" for="content">
                                محتوا
                            </label>
                        </div>
                        <div class="w-full">
                            <textarea name="content"
                                class="bg-gray-100 appearance-none border-2 border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
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
                                <label class="block text-black font-bold md:text-right mb-1" for="slug">
                                    آدرس صفحه (حروف، اعداد، خط فاصله قابل قبول است و بعد از openboard.ir/ قرار می‌گیرد)
                                </label>
                            </div>
                            <div class="w-full">
                                <input name="slug"
                                value="{{ old('slug', $post->slug) }}"
                                    class=" bg-gray-100 appearance-none border-2 border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="" />
                                    @error('slug')
                                    <div class="text-red-700 underline alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="md:flex md:flex-col md:items-start mb-3">
                            <div class="w-full">
                                <label class="block text-black font-bold md:text-right mb-1" for="code">
                                    کد ویرایش (برای ویرایش صفحه لازم خواهد بود)
                                </label>
                            </div>
                            <div class="w-full">
                                <input name="code"
                                    class="bg-gray-100 appearance-none border-2 border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="" />
                            </div>
                        </div>

                        <div class="md:flex md:flex-col md:items-start mb-3">
                            <div class="w-full">
                                <label class="block text-black font-bold md:text-right mb-1" for="title">
                                    عنوان صفحه
                                </label>
                            </div>
                            <div class="w-full">
                                <input name="title"
                                value="{{ old('title', $post->title) }}"
                                    class="bg-gray-100 appearance-none border-2 border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="" />
                            </div>
                        </div>

                        <div class="md:flex md:flex-col md:items-start mb-3">
                            <div class="w-full">
                                <label class="block text-black font-bold md:text-right mb-1" for="author_name">
                                    نویسنده
                                </label>
                            </div>
                            <div class="w-full">
                                <input name="author_name"
                                value="{{ old('author_name', $post->author_name) }}"
                                    class="bg-gray-100 appearance-none border-2 border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="" />
                            </div>
                        </div>

                        <div class="md:flex md:flex-col md:items-start mb-3">
                            <div class="w-full">
                                <label class="block text-black font-bold md:text-right mb-1" for="description">
                                    خلاصه
                                </label>
                            </div>
                            <div class="w-full">
                                <textarea name="description"
                                    class="bg-gray-100 appearance-none border-2 border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="" cols="80" rows="5">{{ old('description', $post->description) }}</textarea>
                            </div>
                        </div>

                        @if($post->exists)
                        <div class="md:flex md:flex-col md:items-start mb-3">
                            <div class="w-full">
                                <label class="block text-black font-bold md:text-right mb-1" for="inline-full-name">
                                    کد ویرایش صفحه
                                </label>
                            </div>
                            <div class="w-full">
                                <input name="submitted_code"
                                value="{{ old('submitted_code', $post->submitted_code) }}"
                                    class="bg-gray-100 appearance-none border-2 border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="" />
                                    @error('submitted_code')
                                    <div class="text-red-700 underline alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        @endif
                    </div>

                    <div class="flex gap-4 justify-end">
                        <button onclick="advancedButton()"
                            class="shadow bg-gray-700 text-sm hover:bg-gray-900 focus:shadow-outline focus:outline-none text-white font-bold py-1 px-2 rounded"
                            type="button">
                            تنظیمات پیشرفته
                        </button>
                        <button
                            class="shadow bg-gray-700 text-sm hover:bg-gray-900 focus:shadow-outline focus:outline-none text-white font-bold py-1 px-2 rounded"
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
</script>

</html>
