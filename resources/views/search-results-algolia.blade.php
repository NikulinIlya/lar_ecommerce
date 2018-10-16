@extends('layout')

@section('title', 'Search Results')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.10.2/dist/instantsearch.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.10.2/dist/instantsearch-theme-algolia.min.css">
@endsection

@section('content')

    @component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Search</span>
    @endcomponent

    <div class="container">
        @if(session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="search-results-container container">
        <h1>Search Results</h1>

        <div id="search-box">
            <!-- SearchBox widget will appear here -->
        </div>

        <div id="stats-container">

        </div>

        <div id="refinement-list">
            <!-- RefinementList widget will appear here -->
        </div>

        <div id="hits">
            <!-- Hits widget will appear here -->
        </div>

        <div id="pagination">
            <!-- Pagination widget will appear here -->
        </div>


    </div> <!-- end search-container -->

@endsection

@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@2.10.2"></script>
    <script src="{{ asset('js/algolia-instantsearch.js') }}"></script>
@endsection