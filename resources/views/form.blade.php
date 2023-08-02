<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="flex items-center justify-center min-h-screen">

          <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
              <!-- text - start -->
              <div class="mb-10 md:mb-16">
                <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">フォーム</h2>
                @if(! empty($user))
                  <p class="max-w-screen-md text-gray-500 md:text-lg">
                    リダイレクト確認 <br />
                    LINE ID: {{ $user->id }} <br />
                    LINE ユーザー名: {{ $user->name }} <br />
                    LINE メールアドレス: {{ $user->email }} <br />
                    <img src="{{ $user->avatar }}" width="100" height="100" alt="avatar">
                  </p>
                @endif
              </div>
              <!-- text - end -->

              <!-- form - start -->
              <form class="mx-auto grid max-w-screen-md gap-4 sm:grid-cols-2">
                <div>
                  <label for="first-name" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">姓*</label>
                  <input name="first-name" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
                </div>

                <div>
                  <label for="last-name" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">名*</label>
                  <input name="last-name" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
                </div>

                <div class="sm:col-span-2">
                  <label for="company" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">会社名</label>
                  <input name="company" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
                </div>

                <div class="sm:col-span-2">
                  <label for="email" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Email*</label>
                  <input name="email" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
                </div>


                <div class="sm:col-span-2">
                  <label for="message" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">お問い合わせ内容*</label>
                  <textarea name="message" class="h-64 w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"></textarea>
                </div>

                <div class="flex items-center justify-between sm:col-span-2">
                  <button class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base">送信</button>

                  <span class="text-sm text-gray-500">*必須</span>
                </div>

              </form>
              <!-- form - end -->
            </div>
          </div>

        </div>
    </body>
</html>
