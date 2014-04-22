<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    "accepted"         => ":attribute必须接受。",
    "active_url"       => ":attribute不是一个有效的URL。",
    "after"            => ":attribute必须是一个在 :date 之后的日期。",
    "alpha"            => ":attribute只能由字母组成。",
    "alpha_dash"       => ":attribute只能由字母、数字和斜杠组成。",
    "alpha_num"        => ":attribute只能由字母和数字组成。",
    "array"            => "The :attributemust be an array.",
    "before"           => ":attribute必须是一个在 :date 之前的日期。",
    "between"          => array(
        "numeric" => ":attribute必须介于 :min - :max 之间。",
        "file"    => ":attribute必须介于 :min - :max 千字节之间。",
        "string"  => ":attribute必须介于 :min - :max 个字符之间。",
        "array"   => "The :attributemust have between :min - :max items."
    ),
    "confirmed"        => ":attribute确认不匹配。",
    "date"             => ":attribute不是一个有效的日期。",
    "date_format"      => ":attribute不匹配日期格式 :format。",
    "different"        => ":attribute和 :other 必须不同。",
    "digits"           => ":attribute必须是 :digits 位的数字。",
    "digits_between"   => ":attribute必须是介于 :min 和 :max 位的数字。",
    "email"            => ":attribute电邮格式非法。",
    "exists"           => "已选的属性 :attribute非法。",
    "image"            => ":attribute必须是一张图片。",
    "in"               => "已选的属性 :attribute非法。",
    "integer"          => ":attribute必须是一个整数。",
    "ip"               => ":attribute必须是一个有效的IP地址。",
    "max"              => array(
        "numeric" => ":attribute必须小于 :max 。",
        "file"    => ":attribute必须小于 :max 千字节。",
        "string"  => ":attribute必须小于 :max 个字符。",
        "array"   => "The :attributemay not have more than :max items."
    ),
    "mimes"            => ":attribute必须是一个 :values 类型的文件。",
    "min"              => array(
        "numeric" => ":attribute必须大于 :min 。",
        "file"    => ":attribute必须大于 :min 千字节。",
        "string"  => ":attribute必须大于 :min 个字符。",
        "array"   => "The :attributemust have at least :min items."
    ),
    "not_in"           => "已选的属性 :attribute非法。",
    "numeric"          => ":attribute必须是一个数字。",
    "regex"            => ":attribute字段必填。",
    "required"         => ":attribute属性需要填写字段。",
    "required_if"      => ":attribute属性当 :other 为 :value时为必填项。",
    "required_with"    => ":attribute属性当 :values 存在时为必填项。",
    "required_with_all" => "The :attributefield is required when :values is present.",
    "required_without" => ":attribute属性当 :values 不存在时为必填项。",
    "required_without_all" => "The :attributefield is required when none of :values are present.",
    "same"             => ":attribute和 :other 必须匹配。",
    "size"             => array(
        "numeric" => ":attribute大小必须是 :size 。",
        "file"    => ":attribute大小必须是 :size 千字节。",
        "string"  => ":attribute必须是 :size 个字符。",
        "array"   => "The :attributemust contain :size items."
    ),
    "unique"           => ":attribute已经有人使用。",
    "url"              => ":attribute格式非法。",
    "recaptcha"        => ':attribute错误。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => array(
        'attribute-name' => array(
            'rule-name' => 'custom-message',
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => array(
        'email' => '邮箱',
        'message' => '信息',
        'recaptcha_response_field' => '验证码'
    ),

);