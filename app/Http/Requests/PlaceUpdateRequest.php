<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Place;

class PlaceUpdateRequest extends FormRequest
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
        $id = $this->place;
        return [
            'nomplace' => 'required|max:255|unique:places,nomplace,'. $id,
            'idutilisateurplace' => 'unique:places, idutilisateurplace' . $id,
        ];
    }
}
