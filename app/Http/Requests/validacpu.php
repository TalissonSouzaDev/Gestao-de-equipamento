<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validacpu extends FormRequest
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
        $url = $this->segment(4);

        return [
        'equipamento'=>'required|min:3|max:50',
        'nome'=>"required|min:3|max:50|unique:cpus,nome,{$url},tombo",
        'tombo'=>"required|min:3|max:50|unique:cpus,tombo,{$url},tombo",
        'n_s'=>"required|min:3|max:50|unique:cpus,n_s,{$url},tombo",
        'marca'=>'required|min:3|max:50',
        'modelo'=>'required|min:3|max:50',
        'tipo'=>'required|min:3|max:50',
        'patrimonio'=>'required|min:3|max:50',
        'unidade_setor'=>'required|min:3|max:50',
        ];
    }

    public function messages()
    {
        return [

            'required'=>'Campo Obrigatorio',
            'nome.unique'=>'Ja Existe maquina Cadastrada com esse Nome',
            'tombo.unique'=>'Ja Existe maquina Cadastrada com esse tombo',
            'n_s.unique'=>'Ja Existe maquina com esse Numero de serie',
            'min'=>'Dever Conter pelo menos 3 Caracters',
            'max'=>'Limite de caracters ate 50',
        ];
    }
}
