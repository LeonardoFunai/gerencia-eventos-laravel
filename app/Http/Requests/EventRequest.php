<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'tipo' => 'required|string',
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:1000',  
            'endereco' => 'required|string|max:255',
            'link_endereco' => 'nullable|url|max:500', 
            'data_hora' => 'required|date',
            'preco' => 'nullable|numeric|min:0',
        ];
    }
    
}

