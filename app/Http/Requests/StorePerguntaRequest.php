<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePerguntaRequest extends FormRequest
{
    /**
     * Determina se o usuário está autorizado a fazer esta requisição.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
<<<<<<< HEAD
     * A rota é POST /eventos/{id}/perguntas e o formulário não envia
     * evento_id no corpo. Copiamos o {id} da URL para o campo evento_id
     * para que ele seja validado (e não possa ser forjado no corpo).
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'evento_id' => $this->route('id'),
        ]);
    }

    /**
     * TICKET #001: regras de validação estritas.
=======
     * TICKET #001: Implemente aqui as regras de validação estritas.
     * Requisitos:
     * - texto: obrigatório, string, mínimo de 10 caracteres, máximo de 255.
     * - evento_id: obrigatório, deve existir na tabela eventos.
>>>>>>> cf28424dc35bb2b55f79ba90174c93dd151872c3
     */
    public function rules(): array
    {
        return [
<<<<<<< HEAD
            'texto'     => ['required', 'string', 'min:10', 'max:255'],
            'evento_id' => ['required', 'exists:eventos,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'texto.required'     => 'A pergunta é obrigatória.',
            'texto.min'          => 'A pergunta deve ter no mínimo :min caracteres.',
            'texto.max'          => 'A pergunta deve ter no máximo :max caracteres.',
            'evento_id.required' => 'O evento é obrigatório.',
            'evento_id.exists'   => 'O evento informado não existe.',
=======
            // TODO (Dev Jr): Adicione as regras de validação para o Ticket #001
>>>>>>> cf28424dc35bb2b55f79ba90174c93dd151872c3
        ];
    }
}
