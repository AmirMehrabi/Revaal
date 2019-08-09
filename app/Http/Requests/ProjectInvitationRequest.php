<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectInvitationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('update', $this->route('project'));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'exists:users,email'
        ];
    }

    public function messages()
    {
        return [
            'email.exists' => 'کاربری که دعوت می‌کنید باید عضو روال باشد'
        ];
    }
}
