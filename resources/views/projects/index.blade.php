@extends('layouts.app')


@section('content')

<header class="flex items-center mb-4 py-4">
    <div class="flex justify-between items-center w-full ">
        <h3>پروژه‌های من</h3>
        <a href="/projects/create" class="button">پروژه‌ی جدید</a>
    </div>

</header>

<div class="lg:flex lg:flex-wrap -mx-3">
    @forelse ($projects as $project)
        @include('projects.card')
    @empty
        <div>پروژه‌ای وجود ندارد</div>
    @endforelse
</div>


@endsection
