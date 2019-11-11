<?php

namespace App\Http\Requests;

use App\AdultChoice;
use App\ChildChoice;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class MenuChoiceFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'adult_name.*' => 'required|string|min:3',
            'adult_starter.*' => 'required|integer|exists:starters',
            'adult_main_course.*' => 'required|integer|exists,main_courses',
            'adult_dessert.*' => 'required|integer|exists,desserts',
            'child_starter.*' => 'nullable|exists:starters',
            'child_main_course.*' => 'nullable|exists:main_courses',
            'child_dessert.*' => 'nullable|exists:desserts',
        ];
    }

    public function messages(): array
    {
        return [
            'adult_name.*.required' => 'The name field is required',
            'adult_name.*.min' => 'The name must be at least 3 letters long',
            'adult_starter.*.integer' => 'Please select a starter',
            'adult_main_course.*.integer' => 'Please select a main course',
            'adult_dessert.*.integer' => 'Please select a dessert',
        ];
    }

    protected function prepareForValidation()
    {
        $input = $this->all();
        $adults = [];
        $this->rsvp->adult_choices->each(function (AdultChoice $choice) use (&$adults, $input) {
            $adults[$choice->id] = [
                'name' => Arr::get($input, 'adult_name.' . $choice->id),
                'starter_id' => Arr::get($input, 'adult_starter.' . $choice->id),
                'main_course_id' => Arr::get($input, 'adult_main_course.' . $choice->id),
                'dessert_id' => Arr::get($input, 'adult_dessert.' . $choice->id),
                'dietary' => Arr::get($input, 'adult_requirements.' . $choice->id),
            ];
        });

        $children = [];
        $this->rsvp->child_choices->each(function (ChildChoice $choice) use (&$children, $input) {
            $children[$choice->id] = [
                'name' => Arr::get($input, 'child_name.' . $choice->id),
                'starter_id' => Arr::get($input, 'child_starter.' . $choice->id),
                'main_course_id' => Arr::get($input, 'child_main_course.' . $choice->id),
                'dessert_id' => Arr::get($input, 'child_dessert.' . $choice->id),
                'dietary' => Arr::get($input, 'child_requirements.' . $choice->id),
            ];
        });

        $input = ['adults' => $adults, 'children' => $children];
        $this->replace($input);
    }
}
