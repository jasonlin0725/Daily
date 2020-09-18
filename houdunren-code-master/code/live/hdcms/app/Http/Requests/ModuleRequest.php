<?php
/** .-------------------------------------------------------------------
 * |  Software: [hdcms framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军大叔 <www.aoxiangjun.com>
 * | Copyright (c) 2012-2019, www.houdunren.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ModuleRequest extends FormRequest
{
    public function authorize()
    {
        return isSuperAdmin();
    }

    public function rules()
    {
        return [
            'title' => 'required|max:10|unique:modules,title,' . request('id'),
            'name' => [
                'sometimes',
                'required',
                'max:10',
//                Rule::notIn(['app', 'system', 'shop', 'edu', 'article', 'admin', 'news', 'community']),
                'regex:/^[a-z]+$/i',
                'unique:modules,name,' . request('id'),
            ],
            'thumb' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => '模块名称不能为空',
            'title.max' => '模块名称最多为10个字符',
            'title.unique' => '模块名称已经存在',
            'name.required' => '模块标识不能为空',
            'name.not_in'=>'模块标识已经存在',
            'name.unique' => '模块标识已经存在',
            'name.max' => '模块标识最多为10个英文字符',
            'name.regex' => '模块标识必须为字母构成',
            'thumb.required' => '模块预览图不能为空',
        ];
    }

}
