@extends('layouts.app')


@section('content')

<form action="/projects" method="post">

    @csrf

    <input type="text" name="title" placeholder="Title">

        <input type="text" name="description" placeholder="description">

        <button type="submit">Submit</button>

</form>
@endsection