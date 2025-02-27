<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @package App\Http\Requests
 */
class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'name' => ['required', 'string', 'min:3', 'max:128'],
            'phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'max:18', 'min:10'],
            'email' => ['required', 'email', 'min:5', 'max:64'],
            'message' => ['required', 'string', 'min:5', 'max:10000'],
//            'gdpr' => ['required'],
            'g-recaptcha-response' => ['required', 'captcha'],
        ];
    }
}
