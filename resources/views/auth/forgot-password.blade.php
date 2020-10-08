@extends('blog.layout',['hidden_footer' => true])
@section('content')
    <div class="lg:mt-10">
        <div class="flex flex-col sm:justify-center items-center bg-gray-100">
            <div class="text-center my-3">
                <h1 class="text-xl leading-9 font-light text-gray-900 tracking-tight px-2 sm:leading-10 md:leading-14">
                    重设密码</h1>
            </div>
        </div>
        <div class="flex flex-col sm:justify-center items-center  bg-gray-100">
            <div class="w-full sm:max-w-md px-6 py-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <div class="mb-4 text-sm text-gray-600">
                    忘记密码了吗？没问题。只要告诉我们您的电子邮件地址，我们就会通过电子邮件将密码重置链接发送给您，该链接将使您可以选择一个新的密码。
                </div>

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <x-jet-validation-errors class="mb-4"/>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="block">
                        <x-jet-label value="{{ __('Email') }}"/>
                        <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                                     autofocus/>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button>
                            电子邮件重制密码链接
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
