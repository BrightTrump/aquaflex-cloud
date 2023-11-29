<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password | AquaFlex</title>

    @if (config('app.env') != 'production')
        @vite(['resources/css/app.css'])
    @endif
    @if (config('app.env') == 'production')
        <link rel="stylesheet" href="/build/assets/style-1b6698d3.css" />
    @endif
</head>

<body>
    <section style="background-image: url('/assets/images/login-background.jpg')"
        class=" dark:bg-gray-900 bg-no-repeat bg-cover min-h-screen">
        <div class=" flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-[9rem] mr-2" src="/assets/images/Logo/aquaflex-white.png" alt="logo">
            </a>
            <div
                class="w-full bg-white shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>
                    <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="name@company.com" required>
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2 input-error text-xl" />

                        <div class="flex items-center justify-between">
                            <a href="/login" class="text-sm text-primary-500">
                                Remember Password?
                            </a>

                        </div>
                        <button type="submit"
                            class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Email
                            Password Reset Link</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
