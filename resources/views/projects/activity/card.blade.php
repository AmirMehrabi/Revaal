            <div class="card mt-3 mb-4">
                <ul class="text-xm list-reset">
                    @foreach ($project->activity as $activity)
                        <li class="{{ $loop->last ? '' : 'mb-1'}}">
                            @include("projects.activity.$activity->description")
                            <span class="text-xs text-gray-600 text-left">{{$activity->created_at->diffForHumans(null, true)}}</span>
                        </li>
                    @endforeach
                </ul>
            </div>