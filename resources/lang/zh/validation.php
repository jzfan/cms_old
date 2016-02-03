<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 合法ation Language Lines
    |--------------------------------------------------------------------------
    |
    | 这个 following language lines contain 这个 default error messages used by
    | 这个 合法ator class. Some of 这个se rules have multiple versions such
    | as 这个 size rules. Feel free to tweak each of 这个se messages here.
    |
    */

    '接受'             => '这个 :attribute 必须 接受.',
    'active_url'           => '这个 :attribute 不是一个 合法 URL.',
    '之后'                => '这个 :attribute 必须 是 :date 之后的 日期 .',
    'alpha'                => '这个 :attribute 可能仅仅包含 字母.',
    'alpha_dash'           => '这个 :attribute 可能仅仅包含 字母, 数字, 和 下划线.',
    'alpha_num'            => '这个 :attribute 可能仅仅包含 字母 和 数字.',
    'array'                => '这个 :attribute 必须 一个数组.',
    'before'               => '这个 :attribute 必须 是 :date 之前的 日期 .',
    '处于'              => [
        'numeric' => '这个 :attribute 必须 处于 :min 和 :max 之间.',
        'file'    => '这个 :attribute 必须 处于 :min 和 :max kilobytes 之间.',
        'string'  => '这个 :attribute 必须 处于 :min 和 :max characters 之间.',
        'array'   => '这个 :attribute must have 处于 :min 和 :max items 之间.',
    ],
    'boolean'              => '这个 :attribute 字段 必须是 真或假.',
    'confirmed'            => '这个 :attribute 确认不符合.',
    'date'                 => '这个 :attribute 不是一个 合法 date.',
    'date_format'          => '这个 :attribute does not match 这个 format :format.',
    'different'            => '这个 :attribute 和 :other 必须 different.',
    'digits'               => '这个 :attribute 必须 :digits digits.',
    'digits_处于'       => '这个 :attribute 必须 处于 :min 和 :max digits.',
    'email'                => '这个 :attribute 必须 a 合法 email address.',
    'exists'               => '这个 selected :attribute is 非法.',
    'filled'               => '这个 :attribute 字段 必须填写.',
    'image'                => '这个 :attribute 必须 an image.',
    'in'                   => '这个 selected :attribute is 非法.',
    'integer'              => '这个 :attribute 必须 an integer.',
    'ip'                   => '这个 :attribute 必须 a 合法 IP address.',
    'json'                 => '这个 :attribute 必须 a 合法 JSON string.',
    'max'                  => [
        'numeric' => '这个 :attribute 不能大于 :max.',
        'file'    => '这个 :attribute 不能大于 :max kilobytes.',
        'string'  => '这个 :attribute 不能大于 :max characters.',
        'array'   => '这个 :attribute 不能多于 :max items.',
    ],
    'mimes'                => '这个 :attribute 必须 是一个文件格式: :values.',
    'min'                  => [
        'numeric' => '这个 :attribute 必须 at least :min.',
        'file'    => '这个 :attribute 必须 at least :min kilobytes.',
        'string'  => '这个 :attribute 必须 at least :min characters.',
        'array'   => '这个 :attribute must have at least :min items.',
    ],
    'not_in'               => '这个 selected :attribute 非法.',
    'numeric'              => '这个 :attribute 必须 一个数字.',
    'regex'                => '这个 :attribute 格式 非法.',
    'required'             => '这个 :attribute 字段 必须填写.',
    'required_if'          => '这个 :attribute 字段 必须填写 when :other is :value.',
    'required_unless'      => '这个 :attribute 字段 必须填写 unless :other is in :values.',
    'required_with'        => '这个 :attribute 字段 必须填写 when :values is present.',
    'required_with_all'    => '这个 :attribute 字段 必须填写 when :values is present.',
    'required_without'     => '这个 :attribute 字段 必须填写 when :values is not present.',
    'required_without_all' => '这个 :attribute 字段 必须填写 when none of :values are present.',
    'same'                 => '这个 :attribute 和 :other must match.',
    'size'                 => [
        'numeric' => '这个 :attribute 必须 :size.',
        'file'    => '这个 :attribute 必须 :size kilobytes.',
        'string'  => '这个 :attribute 必须 :size characters.',
        'array'   => '这个 :attribute 必须包含 :size items.',
    ],
    'string'               => '这个 :attribute 必须 是一个字符串.',
    'timezone'             => '这个 :attribute 必须 是一个 合法 时间区域.',
    'unique'               => '这个 :attribute 已被占用.',
    'url'                  => '这个 :attribute 格式 非法.',

    /*
    |--------------------------------------------------------------------------
    | Custom 合法ation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom 合法ation messages for attributes using 这个
    | convention "attribute.rule" to name 这个 lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom 合法ation Attributes
    |--------------------------------------------------------------------------
    |
    | 这个 following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
