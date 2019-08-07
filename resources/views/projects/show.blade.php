@extends('layouts.app')


@section('content')


<header class="flex items-center mb-4 py-4">
    <div class="flex justify-between items-center w-full ">
        <p class="text-gray-600 text-sm">
            <a href="/projects">پروژه‌های من</a> / {{$project->title}}
        </p>
        <a href="{{$project->path() . '/edit'}}" class="button">ویرایش پروژه</a>
    </div>

</header>

<main>
    <div class="lg:flex -mx-3">
        <div class="lg:w-3/4 px-3 mb-6">
            <div class="mb-8">
                <h2 class="text-gray-600 mb-3">کارها</h2>
                @foreach ($project->tasks as $task)
                    <div class="card mb-3">
                        <form action="{{$task->path()}}" method="post">
                        
                            @method('PATCH')
                            @csrf

                            <div class="flex">
                                <input name="body" value="{{$task->body}}" class="w-full {{$task->completed ? 'text-gray-600' : '' }}">
                                <input type="checkbox" name="completed" onChange="this.form.submit()" {{$task->completed ? 'checked' : ''}}>
                            </div>
                        
                        </form>
                    </div>
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
                <form action="{{ $project->path()}}" method="post">
                    @csrf
                    @method('PATCH')
                    <textarea name="notes" class="card w-full" id="" rows="10" placeholder="آیا یادداشتی دارید که می‌خواهید به این پروژه اضافه کنید؟">{{$project->notes}}</textarea>
                    <button type="submit" class="button">ذخیره</button>
                </form>
            </div>

        </div>

        <div class="lg:w-1/4 px-3">
            @include('projects.card')
        </div>
    </div>
</main>
@endsection