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
            'name' => 'required|string|max:255|unique:events,name',
            'descricao' => 'nullable|string|max:1000',  
            'endereco' => 'required|string|max:255',
            'link_endereco' => 'nullable|url|max:500', 
            'data_hora' => 'required|date',
            'preco' => 'nullable|numeric|min:0',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome do evento é obrigatório.',
            'name.unique' => 'Já existe um evento com este nome.',
            'data_hora.required' => 'A data e hora do evento são obrigatórias.',
            'preco.numeric' => 'O preço deve ser um número válido.',
        ];
    }
    
    
}

