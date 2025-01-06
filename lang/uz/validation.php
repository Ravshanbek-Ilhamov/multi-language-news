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

    'accepted' => ':attribute maydoni qabul qilinishi kerak.',
    'accepted_if' => ':attribute maydoni :other :value bo\'lsa qabul qilinishi kerak.',
    'active_url' => ':attribute maydoni haqiqiy URL bo\'lishi kerak.',
    'after' => ':attribute maydoni :date sanasidan keyin bo\'lishi kerak.',
    'after_or_equal' => ':attribute maydoni :date sanasidan keyin yoki teng bo\'lishi kerak.',
    'alpha' => ':attribute maydoni faqat harflardan iborat bo\'lishi kerak.',
    'alpha_dash' => ':attribute maydoni faqat harflar, raqamlar, chiziqlar va pastki chiziqlardan iborat bo\'lishi kerak.',
    'alpha_num' => ':attribute maydoni faqat harflar va raqamlardan iborat bo\'lishi kerak.',
    'array' => ':attribute maydoni massiv bo\'lishi kerak.',
    'ascii' => ':attribute maydoni faqat bir baytli alfanumerik belgilar va simvollardan iborat bo\'lishi kerak.',
    'before' => ':attribute maydoni :date sanasidan oldin bo\'lishi kerak.',
    'before_or_equal' => ':attribute maydoni :date sanasidan oldin yoki teng bo\'lishi kerak.',
    'between' => [
        'array' => ':attribute maydoni :min va :max o\'rtasida elementlarga ega bo\'lishi kerak.',
        'file' => ':attribute maydoni :min va :max kilobayt o\'rtasida bo\'lishi kerak.',
        'numeric' => ':attribute maydoni :min va :max o\'rtasida bo\'lishi kerak.',
        'string' => ':attribute maydoni :min va :max belgilar o\'rtasida bo\'lishi kerak.',
    ],
    'boolean' => ':attribute maydoni haqiqat yoki yolg\'on bo\'lishi kerak.',
    'can' => ':attribute maydoni ruxsatsiz qiymatni o\'z ichiga oladi.',
    'confirmed' => ':attribute maydoni tasdiqlash mos kelmaydi.',
    'contains' => ':attribute maydoni kerakli qiymatni o\'z ichiga olmaydi.',
    'current_password' => 'Parol noto\'g\'ri.',
    'date' => ':attribute maydoni haqiqiy sana bo\'lishi kerak.',
    'date_equals' => ':attribute maydoni :date sanasiga teng bo\'lishi kerak.',
    'date_format' => ':attribute maydoni :format formatiga mos bo\'lishi kerak.',
    'decimal' => ':attribute maydoni :decimal kasr joyiga ega bo\'lishi kerak.',
    'declined' => ':attribute maydoni rad etilgan bo\'lishi kerak.',
    'declined_if' => ':attribute maydoni :other :value bo\'lsa, rad etilgan bo\'lishi kerak.',
    'different' => ':attribute maydoni va :other farqli bo\'lishi kerak.',
    'digits' => ':attribute maydoni :digits raqamlarga ega bo\'lishi kerak.',
    'digits_between' => ':attribute maydoni :min va :max raqamlar o\'rtasida bo\'lishi kerak.',
    'dimensions' => ':attribute maydoni noto\'g\'ri rasm o\'lchamlariga ega.',
    'distinct' => ':attribute maydoni takroriy qiymatga ega.',
    'doesnt_end_with' => ':attribute maydoni quyidagilardan biri bilan tugamasligi kerak: :values.',
    'doesnt_start_with' => ':attribute maydoni quyidagilardan biri bilan boshlanmasligi kerak: :values.',
    'email' => ':attribute maydoni haqiqiy elektron pochta manzili bo\'lishi kerak.',
    'ends_with' => ':attribute maydoni quyidagilardan biri bilan tugashi kerak: :values.',
    'enum' => 'Tanlangan :attribute noto\'g\'ri.',
    'exists' => 'Tanlangan :attribute noto\'g\'ri.',
    'extensions' => ':attribute maydoni quyidagi kengaytmalaridan biri bo\'lishi kerak: :values.',
    'file' => ':attribute maydoni fayl bo\'lishi kerak.',
    'filled' => ':attribute maydoni qiymatga ega bo\'lishi kerak.',
    'gt' => [
        'array' => ':attribute maydoni :value dan ko\'proq elementlarga ega bo\'lishi kerak.',
        'file' => ':attribute maydoni :value kilobaytdan katta bo\'lishi kerak.',
        'numeric' => ':attribute maydoni :value dan katta bo\'lishi kerak.',
        'string' => ':attribute maydoni :value belgilaridan katta bo\'lishi kerak.',
    ],
    'gte' => [
        'array' => ':attribute maydoni :value yoki undan ko\'proq elementlarga ega bo\'lishi kerak.',
        'file' => ':attribute maydoni :value kilobaytdan katta yoki teng bo\'lishi kerak.',
        'numeric' => ':attribute maydoni :value dan katta yoki teng bo\'lishi kerak.',
        'string' => ':attribute maydoni :value belgilaridan katta yoki teng bo\'lishi kerak.',
    ],
    'hex_color' => ':attribute maydoni haqiqiy oltin rang kodiga ega bo\'lishi kerak.',
    'image' => ':attribute maydoni rasm bo\'lishi kerak.',
    'in' => 'Tanlangan :attribute noto\'g\'ri.',
    'in_array' => ':attribute maydoni :other da mavjud bo\'lishi kerak.',
    'integer' => ':attribute maydoni butun son bo\'lishi kerak.',
    'ip' => ':attribute maydoni haqiqiy IP manzili bo\'lishi kerak.',
    'ipv4' => ':attribute maydoni haqiqiy IPv4 manzili bo\'lishi kerak.',
    'ipv6' => ':attribute maydoni haqiqiy IPv6 manzili bo\'lishi kerak.',
    'json' => ':attribute maydoni haqiqiy JSON satri bo\'lishi kerak.',
    'list' => ':attribute maydoni ro\'yxat bo\'lishi kerak.',
    'lowercase' => ':attribute maydoni kichik harflarda bo\'lishi kerak.',
    'lt' => [
        'array' => ':attribute maydoni :value dan kamroq elementlarga ega bo\'lishi kerak.',
        'file' => ':attribute maydoni :value kilobaytdan kichik bo\'lishi kerak.',
        'numeric' => ':attribute maydoni :value dan kichik bo\'lishi kerak.',
        'string' => ':attribute maydoni :value belgilaridan kichik bo\'lishi kerak.',
    ],
    'lte' => [
        'array' => ':attribute maydoni :value dan ko\'p elementlarga ega bo\'lmasligi kerak.',
        'file' => ':attribute maydoni :value kilobaytdan kichik yoki teng bo\'lishi kerak.',
        'numeric' => ':attribute maydoni :value dan kichik yoki teng bo\'lishi kerak.',
        'string' => ':attribute maydoni :value belgilaridan kichik yoki teng bo\'lishi kerak.',
    ],
    'mac_address' => ':attribute maydoni haqiqiy MAC manziliga ega bo\'lishi kerak.',
    'max' => [
        'array' => ':attribute maydoni :max elementlarga ega bo\'lmasligi kerak.',
        'file' => ':attribute maydoni :max kilobaytdan katta bo\'lmasligi kerak.',
        'numeric' => ':attribute maydoni :max dan katta bo\'lmasligi kerak.',
        'string' => ':attribute maydoni :max belgilaridan katta bo\'lmasligi kerak.',
    ],
    'max_digits' => ':attribute maydoni :max dan ko\'proq raqamlarga ega bo\'lmasligi kerak.',
    'mimes' => ':attribute maydoni quyidagi turdagi fayl bo\'lishi kerak: :values.',
    'mimetypes' => ':attribute maydoni quyidagi turdagi fayl bo\'lishi kerak: :values.',
    'min' => [
        'array' => ':attribute maydoni kamida :min elementlarga ega bo\'lishi kerak.',
        'file' => ':attribute maydoni kamida :min kilobayt bo\'lishi kerak.',
        'numeric' => ':attribute maydoni kamida :min bo\'lishi kerak.',
        'string' => ':attribute maydoni kamida :min belgilar bo\'lishi kerak.',
    ],
    'min_digits' => ':attribute maydoni kamida :min raqamlarga ega bo\'lishi kerak.',
    'missing' => ':attribute maydoni yo\'q bo\'lishi kerak.',
    'missing_if' => ':attribute maydoni :other :value bo\'lsa, yo\'q bo\'lishi kerak.',
    'missing_unless' => ':attribute maydoni :other :value bo\'lmasa, yo\'q bo\'lishi kerak.',
    'missing_with' => ':attribute maydoni :values mavjud bo\'lsa, yo\'q bo\'lishi kerak.',
    'missing_with_all' => ':attribute maydoni :values mavjud bo\'lsa, yo\'q bo\'lishi kerak.',
    'multiple_of' => ':attribute maydoni :value ga ko\'paytma bo\'lishi kerak.',
    'not_in' => 'Tanlangan :attribute noto\'g\'ri.',
    'not_regex' => ':attribute maydoni noto\'g\'ri formatga ega.',
    'numeric' => ':attribute maydoni raqam bo\'lishi kerak.',
    'password' => [
        'letters' => ':attribute maydoni harflardan iborat bo\'lishi kerak.',
        'mixed' => ':attribute maydoni katta va kichik harflarni o\'z ichiga olishi kerak.',
        'numbers' => ':attribute maydoni raqamlardan iborat bo\'lishi kerak.',
        'symbols' => ':attribute maydoni maxsus belgilardan iborat bo\'lishi kerak.',
        'uncompromised' => ':attribute maydoni ma\'lumotlar buzilgan va qayta foydalanishga yaramaydi.',
    ],
    'present' => ':attribute maydoni hozir bo\'lishi kerak.',
    'prohibited' => ':attribute maydoni taqiqlangan.',
    'prohibited_if' => ':attribute maydoni :other :value bo\'lsa, taqiqlangan.',
    'prohibited_unless' => ':attribute maydoni :other :value bo\'lmasa, taqiqlangan.',
    'prohibits' => ':attribute maydoni :other ni taqiqlaydi.',
    'regex' => ':attribute maydoni noto\'g\'ri formatga ega.',
    'required' => ':attribute maydoni talab qilinadi.',
    'required_if' => ':other :value bo\'lsa, :attribute maydoni talab qilinadi.',
    'required_unless' => ':other :value bo\'lmasa, :attribute maydoni talab qilinadi.',
    'required_with' => ':values mavjud bo\'lsa, :attribute maydoni talab qilinadi.',
    'required_with_all' => ':values mavjud bo\'lsa, :attribute maydoni talab qilinadi.',
    'required_without' => ':values mavjud bo\'lmasa, :attribute maydoni talab qilinadi.',
    'required_without_all' => ':values mavjud bo\'lmasa, :attribute maydoni talab qilinadi.',
    'same' => ':attribute va :other mos bo\'lishi kerak.',
    'starts_with' => ':attribute quyidagilardan biri bilan boshlanishi kerak: :values.',
    'string' => ':attribute maydoni matn bo\'lishi kerak.',
    'timezone' => ':attribute maydoni haqiqiy zona bo\'lishi kerak.',
    'unique' => ':attribute maydoni oldin foydalanilgan.',
    'uploaded' => ':attribute yuklab olishda xatolik yuz berdi.',
    'url' => ':attribute maydoni haqiqiy URL bo\'lishi kerak.',
    'uuid' => ':attribute maydoni haqiqiy UUID bo\'lishi kerak.',

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
