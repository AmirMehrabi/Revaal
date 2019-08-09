            <div class="card flex flex-col" style="height: 200px;">
                <h3 class="text-xl py-4 -mr-5 mb-3 border-r-4 border-blue-300 pr-4">
                    <a href="{{ $project->path()}}">{{$project->title}}</a>
                </h3>

                <div class="text-gray-600 mb-4 flex-1">{{str_limit($project->description)}}</div>

                <footer>
                    <form method="POST" action="{{$project->path()}}" class="text-left">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-xs">حذف پروژه</button>
                    </form>
                </footer>
            </div>
