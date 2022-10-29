@extends('user::layouts.master')

@section('content')
    <h1>Notification World</h1>

    <p>
        This view is loaded from module: {!! config('notification.name') !!}
    </p>
@endsection
