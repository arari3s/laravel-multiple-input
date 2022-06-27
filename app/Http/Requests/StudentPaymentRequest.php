<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StudentPaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'spp_id' => 'integer',
            'sarana_id' => 'integer',
            'pts1_id' => 'integer',
            'pts2_id' => 'integer',
            'pas_id' => 'integer',
            'pat_id' => 'integer',
            'infaq_id' => 'integer',
            'pkl_id' => 'integer',
            'ki_id' => 'integer',
            'perpisahan_id' => 'integer',
            'du_id' => 'integer',
            'other_id' => 'integer',
        ];
    }
}
