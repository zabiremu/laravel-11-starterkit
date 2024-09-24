@extends('admin.app')
@section('title', 'Create Short URL')
@section('content')
    @include('admin.components.breadCumbs', ['breadCumbs' => 'Create Short URL'])
    <!-- New Table -->
    <form action="{{ route('admin.store.short_url') }}" method="post">
        @csrf
        @include('admin.components.input', [
            'label' => 'Original URL',
            'type' => 'text',
            'placeholder' => 'https://example.com',
            'name' => 'original_url',
            'required' => true,
        ])
        @include('admin.components.submitButton', ['label' => 'Create'])
    </form>
@endsection
