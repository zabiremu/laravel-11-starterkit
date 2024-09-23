@extends('admin.app')

@section('content')
    @include('admin.components.breadCumbs', ['breadCumbs' => 'Dashboard'])

    <!-- Cards -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        @foreach ($cards = ['1', '2', '3', '4'] as $key => $card)
            <!-- Card -->
            @include('admin.components.card')
            <!-- Card -->
        @endforeach
    </div>

    <!-- New Table -->
    @include('admin.components.table')

    <!-- Charts -->
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Charts
    </h2>
    <div class="grid gap-6 mb-8 md:grid-cols-2">
        @include('admin.components.revenueChart')

        @include('admin.components.trafficChart')
    </div>
@endsection
