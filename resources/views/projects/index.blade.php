@extends('layouts.app')


@section('content')

<header class="flex items-center mb-4 py-4">
    <div class="flex justify-between items-center w-full ">
        <p class="text-gray-600 text-sm">
            <a href="/projects">پروژه‌های من</a>
        </p>        
        
        <a href="/projects/create" class="button">پروژه‌ی جدید</a>
    </div>

</header>

<main class="lg:flex lg:flex-wrap -mx-3">
    @forelse ($projects as $project)
        <div class="lg:w-1/3 px-3 pb-6">
            @include('projects.card')   
        </div>
    @empty
        <div>پروژه‌ای وجود ندارد</div>
    @endforelse
</main>

<new-project-modal></new-project-modal>



<a href="#" @click.prevent="$modal.show('new-project')">نمایش مودال</a>


@endsection
