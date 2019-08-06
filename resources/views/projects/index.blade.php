@extends('layouts.app')


@section('content')

<div class="flex items-center">
    <h1 class="mr-auto">روال</h1>
    <a href="/projects/create">پروژه‌ی جدید</a>
</div>
<ul>
    @forelse ($projects as $project)
<li><a href="/projects/{{$project->id}}">{{$project->title}}</a></li>
    @empty
        <li>پروژه‌ای وجود ندارد</li>
    @endforelse
</ul>

@endsection