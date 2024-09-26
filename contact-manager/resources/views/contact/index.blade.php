@extends('layouts.app')

@section('content')
    <div id="app">
        <div id="app">
            <contact-index :contacts="{{ json_encode($contacts) }}" :message="{{ json_encode(session('message')) }}"></contact-index>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script type="module" src="{{ mix('resources/js/app.js') }}"></script>
@endsection
