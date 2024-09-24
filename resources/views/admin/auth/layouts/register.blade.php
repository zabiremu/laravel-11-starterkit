@extends('admin.auth.app')

@section('content')
    <div class="w-full">
        <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
            Register
        </h1>

        <form action="{{ route('register') }}" method="post">
            @csrf
            @include('admin.components.input', [
                'label' => 'Name',
                'placeholder' => 'Name',
                'type' => 'text',
                'name' => 'name',
                'required' => true,
            ])

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

            @include('admin.components.input', [
                'label' => 'Confirm Password',
                'placeholder' => '*******',
                'type' => 'password',
                'name' => 'confirm_password',
                'required' => true,
            ])
            <!-- You should use a button here, as the anchor is only used for the example  -->
            @include('admin.components.submitButton', ['label' => 'Register'])
        </form>




    </div>
@endsection
