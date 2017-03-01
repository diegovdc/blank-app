<?php

namespace App\Http\Requests\Admin\Pages\Components;

use App\Http\Requests\Request;

class UpdatePageComponentRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->user && ($this->user->hasPermission('manage_pages_contents') || $this->user->hasPermission('manage_pages')  ) ) {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $editables   = $this->route()->parameters()["page_section"]->all_editable_contents;

        $rules = [
            'content'       => 'array',
            'excerpt'       => 'array',
            'iframe'        => 'array',
            'link'          => 'array',
            'subtitle'      => 'array',
            'title'         => 'array',
        ];

        foreach ($this->languages_isos as $key => $lang_iso) {
            $rules['title.'.$lang_iso   ]  = $editables->title ? 'present|string' : '';
            $rules['subtitle.'.$lang_iso]  = $editables->subtitle ? 'present|string' : '';
            $rules['excerpt.'.$lang_iso ]  = $editables->excerpt ? 'present|string' : '';
            $rules['content.'.$lang_iso ]  = $editables->content ? 'present|string' : '';
            $rules['iframe.'.$lang_iso  ]  = $editables->iframe ? 'present|string' : '';
            $rules['link.'.$lang_iso    ]  = $editables->link ? 'present|url' : '';
        }

        return $rules;
    }
}
