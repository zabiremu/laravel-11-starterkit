@extends('admin.auth.app')

@section('content')
    <div class="w-full">
        <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
            Login
        </h1>

        <form action="{{ route('login') }}" method="post" method="post">
            @csrf
            @include('admin.components.input', [
                'label' => 'Email',
                'placeholder' => 'demo@email.com',
                'type' => 'email',
                'name' => 'email',
                'required' => true,
            ])

            @include('admin.components.input', [
                'label' => 'Password',
                'placeholder' => '*******',
                'type' => 'password',
                'name' => 'password',
                'required' => true,
            ])
            @include('admin.components.submitButton', ['label' => 'Login'])
        </form>

        <hr class="my-8" />
        @include('admin.components.button', ['label' => 'Github'])
        @include('admin.components.button', ['label' => 'Twitter'])

        @include('admin.components.forgetPassword', [
            'label' => 'Forget Password?',
            'url' => 'password.request',
        ])
        @include('admin.components.forgetPassword', [
            'label' => 'Create Account?',
            'url' => 'register',
        ])

    </div>
@endsection
