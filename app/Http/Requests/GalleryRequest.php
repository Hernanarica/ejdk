<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
	 * @return array<string, mixed>
	 */
	public function rules(): array
	{
		return [
			'title'       => ['required'],
			'description' => ['required'],
			'image'       => ['required'],
		];
	}
	
	/**
	 * Get the messages that apply to the request
	 *
	 * @return string[]
	 */
	public function messages(): array
	{
		return [
			'title.required'       => 'EL titulo es obligatorio',
			'description.required' => 'La descripcion es obligatoria',
			'image.required'       => 'La imagen es obligatoria',
		];
	}
}
