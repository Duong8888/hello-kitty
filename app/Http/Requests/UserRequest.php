<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $data = 'label1';
        switch ($data) {
            case 'label1':
                echo '1';
                break;
            case 'label2':
                echo '13';
                break;
            case 'label3':
                echo '12';
                break;
            default:
                echo '113';
        }


        return [
            //
        ];
    }
}
