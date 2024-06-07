<?php

namespace App\Http\Requests\Category;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //dd($this->all());
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('categories')->ignore($this->route('category')->id),
            ],
            // 'title'=>'required|string|max:255',
            'route_outbound' => 'required|string|max:255',
            'route_inbound' => 'required|string|max:255',
            'operating_time' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'status' => 'required|boolean',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Tiêu đề là bắt buộc.',
            'title.string' => 'Tiêu đề phải là một chuỗi ký tự.',
            'title.max' => 'Tiêu đề không được vượt quá 255 ký tự.',
            'title.unique' => 'Tuyến xe đã tồn tại.',
            'route_outbound.required' => 'Lộ trình chiều đi là bắt buộc.',
            'route_outbound.string' => 'Lộ trình chiều đi phải là một chuỗi ký tự.',
            'route_outbound.max' => 'Lộ trình chiều đi không được vượt quá 255 ký tự.',
            'route_inbound.required' => 'Lộ trình chiều về là bắt buộc.',
            'route_inbound.string' => 'Lộ trình chiều về phải là một chuỗi ký tự.',
            'route_inbound.max' => 'Lộ trình chiều về không được vượt quá 255 ký tự.',
            'operating_time.required' => 'Thời gian hoạt động là bắt buộc.',
            'operating_time.string' => 'Thời gian hoạt động phải là một chuỗi ký tự.',
            'operating_time.max' => 'Thời gian hoạt động không được vượt quá 255 ký tự.',
            'price.required' => 'Giá vé là bắt buộc.',
            'price.numeric' => 'Giá vé phải là một số.',
            'price.min' => 'Giá vé phải là một số không âm.',
            'status.required' => 'Trạng thái là bắt buộc.',
            'status.boolean' => 'Trạng thái phải là true hoặc false.',
        ];
    }
}
