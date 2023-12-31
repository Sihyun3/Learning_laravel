<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


//이거는 룰 같은거 정하기 위해서 사용
class BoardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // 로그인 되었다고 친다
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
            //
            'board_title' => 'required|min:2|max:10',
            'board_content' => 'required'
        ];
    }
}