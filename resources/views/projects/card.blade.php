        <div class="lg:w-1/3 px-3 pb-6">
            <div class="card" style="height: 200px;">
                <h3 class="text-xl py-4 -mr-5 mb-3 border-r-4 border-blue-300 pr-4">
                    <a href="{{ $project->path()}}">{{$project->title}}</a>
                </h3>

                <div class="text-gray-600">{{str_limit($project->description)}}</div>
            </div>
        </div>