<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class StoreUpdateSupport extends FormRequest
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
     *  \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        //validações para o formulario
        //caso não tenha os caracteres necessários os form não vai enviar
        $rules =  [
            'subject' => 'required|min:3|max:255|unique:supports', //o unique diz que ele não pode ter dois assuntos repetidos
            'body' => [
                'required',
                'min:3',
                'max:10000',
            ],
        ];
        if ($this->method() === 'PUT') { //verifica se os campos já existem.
            $rules['subject'] = [
                'required',
                'min:3',
                'max:255',
                //"unique:supports,subject,{$this->id},id",
                Rule::unique('supports')->ignore($this->id),
            ];
        }
        return $rules;
        
    }
}

//php artisan make:request StoreUpdateSupport 