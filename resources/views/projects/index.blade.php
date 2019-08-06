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
        <div class="lg:w-1/3 px-3 pb-6">
            <div class="bg-white ml-4 rounded-lg shadow p-5" style="height: 200px;">
                <h3 class="text-xl py-4 -mr-5 mb-3 border-r-4 border-blue-300 pr-4">
                    <a href="{{ $project->path()}}">{{$project->title}}</a>
                </h3>

                <div class="text-gray-600">{{str_limit($project->description)}}</div>
            </div>
        </div>
    @empty
        <div>پروژه‌ای وجود ندارد</div>
    @endforelse
</div>


@endsection
