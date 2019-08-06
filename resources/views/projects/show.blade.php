@extends('layouts.app')


@section('content')


<header class="flex items-center mb-4 py-4">
    <div class="flex justify-between items-center w-full ">
        <p class="text-gray-600 text-sm">
            <a href="/projects">پروژه‌های من</a> / {{$project->title}}
        </p>
        <a href="/projects/create" class="button">پروژه‌ی جدید</a>
    </div>

</header>

<main>
    <div class="lg:flex -mx-3">
        <div class="lg:w-3/4 px-3 mb-6">
            <div class="mb-8">
                <h2 class="text-gray-600 mb-3">کارها</h2>
                @foreach ($project->tasks as $task)
                    <div class="card mb-3">{{$task->body}}</div>
                @endforeach
                    <div class="card mb-3">
                        <form action="{{ $project->path() .'/tasks'}} " method="post">
                            @csrf

                            <input name="body" placeholder="یک کار جدید وارد کنید" class="w-full">
                        </form>    
                    </div>


            </div>

            <div class="mb-8">
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