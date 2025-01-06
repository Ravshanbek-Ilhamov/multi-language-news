<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute должен быть принят.',
    'accepted_if' => ':attribute должен быть принят, если :other равно :value.',
    'active_url' => ':attribute не является допустимым URL.',
    'after' => ':attribute должен быть датой после :date.',
    'after_or_equal' => ':attribute должен быть датой после или равной :date.',
    'alpha' => ':attribute может содержать только буквы.',
    'alpha_dash' => ':attribute может содержать только буквы, цифры, дефисы и подчеркивания.',
    'alpha_num' => ':attribute может содержать только буквы и цифры.',
    'array' => ':attribute должен быть массивом.',
    'ascii' => ':attribute должен содержать только однобайтовые символы.',
    'before' => ':attribute должен быть датой до :date.',
    'before_or_equal' => ':attribute должен быть датой до или равной :date.',
    'between' => [
        'array' => ':attribute должен содержать от :min до :max элементов.',
        'file' => ':attribute должен быть от :min до :max килобайт.',
        'numeric' => ':attribute должен быть между :min и :max.',
        'string' => ':attribute должен быть от :min до :max символов.',
    ],
    'boolean' => ':attribute должен быть true или false.',
    'confirmed' => 'Подтверждение :attribute не совпадает.',
    'current_password' => 'Неверный пароль.',
    'date' => ':attribute не является допустимой датой.',
    'date_equals' => ':attribute должен быть датой, равной :date.',
    'date_format' => ':attribute не соответствует формату :format.',
    'different' => ':attribute и :other должны быть разными.',
    'digits' => ':attribute должен содержать :digits цифр.',
    'digits_between' => ':attribute должен быть от :min до :max цифр.',
    'email' => ':attribute должен быть допустимым адресом электронной почты.',
    'exists' => 'Выбранный :attribute недействителен.',
    'file' => ':attribute должен быть файлом.',
    'filled' => ':attribute должен иметь значение.',
    'gt' => [
        'array' => ':attribute должен содержать более :value элементов.',
        'file' => ':attribute должен быть больше :value килобайт.',
        'numeric' => ':attribute должен быть больше :value.',
        'string' => ':attribute должен быть длиннее :value символов.',
    ],
    'gte' => [
        'array' => ':attribute должен содержать :value элементов или больше.',
        'file' => ':attribute должен быть больше или равен :value килобайт.',
        'numeric' => ':attribute должен быть больше или равен :value.',
        'string' => ':attribute должен быть длиннее или равен :value символов.',
    ],
    'image' => ':attribute должен быть изображением.',
    'in' => 'Выбранный :attribute недействителен.',
    'integer' => ':attribute должен быть целым числом.',
    'ip' => ':attribute должен быть действительным IP-адресом.',
    'ipv4' => ':attribute должен быть действительным IPv4-адресом.',
    'ipv6' => ':attribute должен быть действительным IPv6-адресом.',
    'json' => ':attribute должен быть допустимой строкой JSON.',
    'max' => [
        'array' => ':attribute не должен содержать более :max элементов.',
        'file' => ':attribute не должен быть больше :max килобайт.',
        'numeric' => ':attribute не должен быть больше :max.',
        'string' => ':attribute не должен превышать :max символов.',
    ],
    'mimes' => ':attribute должен быть файлом типа: :values.',
    'min' => [
        'array' => ':attribute должен содержать как минимум :min элементов.',
        'file' => ':attribute должен быть не менее :min килобайт.',
        'numeric' => ':attribute должен быть не менее :min.',
        'string' => ':attribute должен быть не короче :min символов.',
    ],
    'not_in' => 'Выбранный :attribute недействителен.',
    'numeric' => ':attribute должен быть числом.',
    'required' => 'Поле :attribute обязательно для заполнения.',
    'same' => ':attribute и :other должны совпадать.',
    'size' => [
        'array' => ':attribute должен содержать :size элементов.',
        'file' => ':attribute должен быть :size килобайт.',
        'numeric' => ':attribute должен быть :size.',
        'string' => ':attribute должен содержать :size символов.',
    ],
    'unique' => ':attribute уже существует.',
    'url' => 'Формат :attribute недействителен.',
    'uuid' => ':attribute должен быть действительным UUID.',
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

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
