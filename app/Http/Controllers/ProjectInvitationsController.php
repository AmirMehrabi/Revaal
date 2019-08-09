<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectInvitationsController extends Controller
{


    public function store(Project $project, ProjectInvitationsController $request)
    {

        // $this->authorize('update', $project);

        // request()->validate([
        //     'email' => 'exists:users,email'
        // ], [
        //     'email.exists' => 'کاربری که دعوت می‌کنید باید عضو روال باشد'
        // ]);

        $user = User::whereEmail(request('email'))->first();

        $project->invite($user);

        return redirect($project->path());
    }
}
