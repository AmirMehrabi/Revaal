@extends('layouts.app')


@section('content')
<ul>
    @forelse ($projects as $project)
<li><a href="/projects/{{$project->id}}">{{$project->title}}</a></li>
    @empty
        <li>پروژه‌ای وجود ندارد</li>
    @endforelse
</ul>

@endsection