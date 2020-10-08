@extends('blog.layout',['hidden_footer' => true])
@section('content')
    <div class="lg:mt-10">
        <div class="flex flex-col sm:justify-center items-center bg-gray-100">
            <div class="text-center my-3">
                <h1 class="text-xl leading-9 font-light text-gray-900 tracking-tight px-2 sm:leading-10 md:leading-14">
                    用户登陆</h1>
            </div>
        </div>
        <div class="flex flex-col sm:justify-center items-center bg-gray-100">
            <div class="w-full sm:max-w-md px-6 py-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <div class="text-center my-3">
                    <label class="text-base leading-9 text-gray-900 tracking-tight px-2 sm:leading-10 md:leading-14">欢迎回来，请登录您的账号。</label>
                </div>
                <x-jet-validation-errors class="mb-4"/>

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <x-jet-label value="{{ __('Email') }}"/>
                        <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                                     autofocus/>
                    </div>

                    <div class="mt-5">
                        <x-jet-label value="{{ __('Password') }}"/>
                        <x-jet-input class="block mt-1 w-full" type="password" name="password" required
                                     autocomplete="current-password"/>
                    </div>

                    <div class="mt-5 flex">
                        <label class="flex items-center">第三方登陆：</label>
                        <div>
                            <div class="w-1/2 mx-auto">
                                <a href="{{ route('oauth',['driver'=>'github']) }}">
                                    <svg t="1601712219551" class="icon mx-auto" viewBox="0 0 1024 1024" version="1.1"
                                         xmlns="http://www.w3.org/2000/svg" p-id="3279" width="30" height="30">
                                        <path d="M512.96 3.52C230.72 3.52 1.92 232.32 1.92 514.56c0 225.92 146.56 417.28 349.44 485.12 25.6 4.8 34.88-11.2 34.88-24.64 0-12.16-0.32-44.16-0.64-87.04-142.08 31.04-172.16-68.48-172.16-68.48-23.36-59.2-56.64-74.88-56.64-74.88-46.72-31.36 3.2-30.72 3.2-30.72 51.2 3.52 78.4 52.8 78.4 52.8 45.44 78.08 119.68 55.68 148.8 42.56 4.8-32.96 17.92-55.68 32.32-68.48-113.6-12.8-232.96-56.64-232.96-252.48 0-55.68 19.84-101.44 52.48-137.28-5.12-12.8-22.72-64.96 5.12-135.36 0 0 42.88-13.76 140.48 52.48 40.64-11.2 84.48-16.96 128-17.28 43.52 0.32 87.04 5.76 128 17.28 97.6-66.24 140.48-52.48 140.48-52.48 27.84 70.4 10.24 122.24 5.12 135.36 32.64 35.84 52.48 81.28 52.48 137.28 0 196.48-119.36 239.68-233.28 252.16 18.24 15.68 34.56 47.04 34.56 94.72 0 68.48-0.64 123.52-0.64 140.16 0 13.76 9.28 29.44 35.2 24.64C877.76 932.16 1024 740.48 1024 514.88 1024 232.32 795.2 3.52 512.96 3.52z"
                                              fill="#181616" p-id="3280"></path>
                                    </svg>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="block mt-5">
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox" name="remember">
                            <span class="ml-2 text-sm text-gray-600">记住我</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-3">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                               href="{{ route('password.request') }}">
                                忘记您的密码
                            </a>
                        @endif

                        <x-jet-button class="ml-4">
                            {{ __('Login') }}
                        </x-jet-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
