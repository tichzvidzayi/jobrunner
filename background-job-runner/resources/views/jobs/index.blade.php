@extends('layouts.app')

@section('content')
<h1>Background Job Logs</h1>
<ul>
@foreach ($logs as $log)
<li>{{ trim($log) }}</li>
@endforeach
</ul>
@endsection
