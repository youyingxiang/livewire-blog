@extends('blog.layout',['hidden_footer' => true])
@section('content')
    <div class="lg:mt-10">
        <div class="flex flex-col sm:justify-center items-center bg-gray-100">
            <div class="text-center my-3">
                <h1 class="text-xl leading-9 font-light text-gray-900 tracking-tight px-2 sm:leading-10 md:leading-14">
                    用户注册</h1>
            </div>
        </div>

        <div class="flex flex-col sm:justify-center items-center bg-gray-100">
            <div class="w-full sm:max-w-md px-6 py-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <x-jet-validation-errors class="mb-4"/>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <x-jet-label value="{{ __('Name') }}"/>
                        <x-jet-input class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                                     autofocus autocomplete="name"/>
                    </div>

                    <div class="mt-4">
                        <x-jet-label value="{{ __('Email') }}"/>
                        <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                     required/>
                    </div>

                    <div class="mt-4">
                        <x-jet-label value="{{ __('Password') }}"/>
                        <x-jet-input class="block mt-1 w-full" placeholder="密码长度不得低于8位" type="password" name="password" required
                                     autocomplete="new-password"/>
                    </div>

                    <div class="mt-4">
                        <x-jet-label value="{{ __('Confirm Password') }}"/>
                        <x-jet-input class="block mt-1 w-full" placeholder="密码长度不得低于8位" type="password" name="password_confirmation" required
                                     autocomplete="new-password"/>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            已经注册？
                        </a>

                        <x-jet-button class="ml-4">
                            {{ __('Register') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
