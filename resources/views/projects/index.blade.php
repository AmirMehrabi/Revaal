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

<modal name="hello-world" classes="p-10 bg-white rounded-lg shadow mr-auto" height="auto">
  <h1 class="text-center text-xl my-4">یک پروژه‌ی جدید شروع کنید</h1>

  <div class="flex">
      <div class="flex-1 ml-4">
          <div class="mb-4">
              <label for="title" class="text-sm block mb-2">تیتر</label>
              <input type="text" name="title" id="title" class="border border-gray-300 p-2 text-sm block w-full rounded" placeholder="پروژه‌ی جدید من">
          </div>

          <div class="mb-4">
              <label for="description" class="text-sm block mb-2">تیتر</label>
              <textarea name="description" id="description" class="border border-gray-300 p-2 text-sm block w-full rounded" placeholder="پروژه‌ی جدید من" rows="7"> </textarea>
          </div>
      </div>

      <div class="flex-1 mr-4">
          <div class="mb-4">
              <label class="text-sm block mb-2">کارهای مربوط به این پروژه</label>
              <input type="text" class="border border-gray-300 p-2 text-sm block w-full rounded" placeholder="کار اول">
          </div>
      </div>
  </div>
</modal>



<a href="#" @click.prevent="$modal.show('hello-world')">نمایش مودال</a>


@endsection
