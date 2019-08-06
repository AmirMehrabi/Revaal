@extends('layouts.app')


@section('content')

<div class="flex items-center">
    <h1 class="mr-auto">روال</h1>
    <a href="/projects/create">پروژه‌ی جدید</a>
</div>

<div>
    @forelse ($projects as $project)

    <div class="bg-white">
        <h3>{{$project->title}}</h3>

        <div>{{$project->description}}</div>
    </div>
    
    @empty
        <div>پروژه‌ای وجود ندارد</div>
    @endforelse
</div>


@endsection
