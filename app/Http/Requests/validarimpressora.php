<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarimpressora extends FormRequest
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
            'ip'=>'required|min:3|max:50',
            'tombo'=>"required|min:3|max:50|unique:impressoras,tombo,{$url},tombo",
            'n_s'=>"required|min:3|max:50|unique:impressoras,n_s,{$url},tombo",
            'marca'=>'required|min:3|max:50',
            'modelo'=>'required|min:3|max:50',
            'patrimonio'=>'required|min:3|max:50',
            'unidade_setor'=>'required|min:3|max:50',
            ];
        }

        public function messages()
        {
            return [

                'required'=>'Campo Obrigatorio',
                'tombo.unique'=>'Ja Existe Cadastrada com esse tombo',
                'n_s.unique'=>'Ja Existe registro com esse Numero de serie',
                'min'=>'Dever Conter pelo menos 3 Caracters',
                'max'=>'Limite de caracters ate 50',
            ];
        }
}
