@extends('layouts.system')
@section('content')
    <form action="{{route('system.group.store')}}" method="post">
        @csrf
       @include('system.group._form')
    </form>
@endsection