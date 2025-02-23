<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image',
            'category_id' => 'integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'integer|nullable|exists:tags,id'
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Это поле необходимо для заполнения.',
            'title.string' => 'Данные должны соответствовать строчному типу.',
            'content.required' => 'Это поле необходимо для заполнения.',
            'content.string' => 'Данные должны соответствовать строчному типу.',
            'image.required' => 'Это поле необходимо для заполнения.',
            'image.image' => 'Необходимо загрузить фотографию.',
            'category_id.required' => 'Это поле необходимо для заполнения.',
            'category_id.integer' => 'ID категории должно быть в базе данных.',
            'category_id.exists' => 'ID категории должно быть целым числом.',
            'tag_ids.required' => 'Необходимо отправить массив данных.',
        ];
    }
}
