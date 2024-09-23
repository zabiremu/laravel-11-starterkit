@extends('admin.auth.app')

@section('content')
    <div class="w-full">
        <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
            Forget Password
        </h1>
        @if (session('status'))
            @include('admin.components.session', ['status' => session('status')])
        @endif
        <form action="{{ route('password.email') }}" method="post" method="post">
            @csrf
            @include('admin.components.input', [
                'label' => 'Email',
                'placeholder' => 'demo@email.com',
                'type' => 'email',
                'name' => 'email',
                'required' => true,
            ])
            @include('admin.components.submitButton', ['label' => 'password request'])
        </form>

        <hr class="my-8" />


        @include('admin.components.forgetPassword', [
            'label' => 'Login?',
            'url' => 'login',
        ])

    </div>
@endsection
