@extends('layouts.app')


@section('content')


<header class="flex items-center mb-4 py-4">
    <div class="flex justify-between items-center w-full ">
        <h3>پروژه‌های من</h3>
        <a href="/projects/create" class="button">پروژه‌ی جدید</a>
    </div>

</header>

<main>
    <div class="lg:flex -mx-3">
        <div class="lg:w-3/4 px-3 mb-6">
            <div class="mb-6">
                <h2 class="text-gray-600 mb-3">کارها</h2>
                <div class="card">لورم ایپسوم</div>


            </div>

            <div class="mb-6">
                <h2 class="text-gray-600 mb-3">یادداشت‌های عمومی</h2>

                <div class="card">لورم ایپسوم</div>
            </div>

        </div>

        <div class="lg:w-1/4 px-3">
            @include('projects.card')
        </div>
    </div>
</main>
@endsection