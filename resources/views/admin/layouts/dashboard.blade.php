@extends('admin.app')
@section('title', 'Dashboard')
@section('content')
    @include('admin.components.breadCumbs', ['breadCumbs' => 'Generate URL'])

    <!-- New Table -->
    @include('admin.components.table', ['shortUrls' => $shortUrl, 'shortUrlVisits' => $shortUrlVisit])
@endsection
