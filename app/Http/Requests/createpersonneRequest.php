<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createpersonneRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           "pr_name" => "required",
            "pr_prenom" => "required",
            "pr_email" => "required",
            "pr_password" => "required",
            "pr_active" => "required",
        ];
    }
    public function messages(){
        return [
            "pr_name.required" => "le nom est obligatoire",
            "pr_prenom.required" => "le prenom est obligatoire",
            "pr_email.required" => "l'email est obligatoire",
            "pr_password.required" => "le mot de passe est obligatoire",
            "pr_active.required" => "la situation est obligatoire",
        ];
    }
}
