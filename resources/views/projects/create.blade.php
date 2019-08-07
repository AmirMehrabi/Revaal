@extends('layouts.app')


@section('content')
    <div class="lg:w-1/2 lg:mx-auto bg-white p-6 md:py-12 md:px-16 rounded shadow">
        <h1 class="text-2xl font-normal mb-10 text-center">
            ایجاد پروژه‌ی جدید
        </h1>
        <form action="/projects" method="post">

        @csrf

        @include('projects.form', ['project' => new App\Project, 'buttonText' => 'افزودن پروژه'])
    </div>


</form>
@endsection