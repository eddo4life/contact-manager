@extends('layouts.app')

@section('content')
    <div id="app">
        <contact-create></contact-create>
    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script type="module" src="{{ mix('resources/js/app.js') }}"></script>
@endsection
