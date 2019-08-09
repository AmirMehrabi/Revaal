<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use App\Http\Requests\ProjectInvitationRequest;

use Illuminate\Http\Request;

class ProjectInvitationsController extends Controller
{


    public function store(Project $project, ProjectInvitationRequest $request)
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
