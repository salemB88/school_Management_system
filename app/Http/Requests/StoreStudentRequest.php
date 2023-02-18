<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStudentRequest extends FormRequest
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
    public function rules()
    {
        if (request()->isMethod('POST')) {
            return $rules = [
                'email' => ['required', Rule::unique('students', 'email')],
                'password' => 'required',
                'name_ar' => 'required',
                'name_en' => 'required',
                'gender_id' => 'required',
                'nationality_id' => 'required',
                'blood_id' => 'required',
                'birth_date'=>'required|date',
                'grade_id' => 'required',
                'classroom_id' => 'required',
                'section_id' => 'required',
                'parent_id' => 'required',
                'academic_year' => 'required',
            ];

        } elseif (request()->isMethod('PATCH')) {

            return $rules = [
                'email' => ['required', Rule::unique('students', 'email')->ignore($this->student->id)],
                'password' => 'required',
                'name_ar' => 'required',
                'name_en' => 'required',
                'gender_id' => 'required',
                'nationality_id' => 'required',
                'blood_id' => 'required',
                'birth_date'=>'required|date',
                'grade_id' => 'required',
                'classroom_id' => 'required',
                'section_id' => 'required',
                'parent_id' => 'required',
                'academic_year' => 'required',
            ];

        }


    }

    public function messages()
    {
        return [
            'email.required' => trans('validation.required'),
            'email.unique' => trans('validation.unique'),
            'password.required' => trans('validation.required'),
            'name_ar.required' => trans('validation.required'),
            'name_en.required' => trans('validation.required'),
            'specialization_id.required' => trans('validation.required'),
            'gender_id.required' => trans('validation.required'),
            'sections.required' => trans('validation.required'),
            'joining_date.required' => trans('validation.required'),
            'address.required' => trans('validation.required'),
        ];
    }
}
