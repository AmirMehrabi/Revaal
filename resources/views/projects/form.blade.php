    @csrf



    <div class="field mb-6">
        <label class="lable text-sm mb-2 block" for="title">تیتر</label>

        <div class="control">
            <input type="text" name="title" placeholder="پروژه‌ی جدید من" value="{{$project->title}}" class="input bg-transparent border border-grey-400 rounded p-2 text-xs w-full">
        </div>
    </div>


    <div class="field mb-6">
        <label class="lable text-sm mb-2 block" for="title">تیتر</label>

        <div class="control">
            <textarea name="description" placeholder="باید برنامه نویسی یاد بگیرم" class="input bg-transparent border border-grey-400 rounded p-2 text-xs w-full">{{$project->description}}</textarea>
        </div>
    </div>

    <div class="field text-left">
        <div class="control">
            <a href="{{$project->path()}}">انصراف</a>
            <button type="submit" class="button text-center">{{$buttonText}}</button>

        </div>
        

    </div>

        @if ($errors->any())
            <div class="field mt-6">
                @foreach ($errors->all() as $error)
                    <li class="text-sm text-red-700">{{$error}}</li>
                @endforeach
            </div>            
        @endif
