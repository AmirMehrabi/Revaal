            <div class="card flex flex-col">
                <h3 class="text-xl py-4 -mr-5 mb-3 border-r-4 border-blue-300 pr-4">
                    <a href="{{ $project->path()}}">افزودن کاربر</a>
                </h3>

                <footer class=" flex-1">
                    <form method="POST" action="{{$project->path() . '/invitations'}}">
                        @csrf

                        <div class="mb-2">
                            <input type="email" name="email" class="border border-grey-500 rounded w-full px-3 py-2" placeholder="آدرس ایمیل">
                        </div>

                        <button type="submit" class="button">دعوت</button>
                    </form>

                    @include('errors', ['bag' => 'invitations'])
                </footer>
            </div>