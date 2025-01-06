<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Baris bahasa berikut mengandungi mesej ralat lalai yang digunakan oleh
    | kelas validator. Beberapa peraturan ini mempunyai pelbagai versi seperti
    | peraturan saiz. Anda bebas untuk mengubahsuai setiap mesej ini di sini.
    |
    */

    'accepted' => ':attribute mesti diterima.',
    'active_url' => ':attribute bukan URL yang sah.',
    'after' => ':attribute mesti tarikh selepas :date.',
    'after_or_equal' => ':attribute mesti tarikh selepas atau sama dengan :date.',
    'alpha' => ':attribute hanya boleh mengandungi huruf.',
    'alpha_dash' => ':attribute hanya boleh mengandungi huruf, nombor, dan sengkang.',
    'alpha_num' => ':attribute hanya boleh mengandungi huruf dan nombor.',
    'array' => ':attribute mesti menjadi tatasusunan.',
    'before' => ':attribute mesti tarikh sebelum :date.',
    'before_or_equal' => ':attribute mesti tarikh sebelum atau sama dengan :date.',
    'between' => [
        'numeric' => ':attribute mesti antara :min dan :max.',
        'file' => ':attribute mesti antara :min dan :max kilobytes.',
        'string' => ':attribute mesti antara :min dan :max characters.',
        'array' => ':attribute mesti mempunyai antara :min dan :max items.',
    ],
    'boolean' => 'Ruangan :attribute mesti benar atau palsu.',
    'confirmed' => 'Pengesahan :attribute tidak sepadan.',
    'date' => ':attribute bukan tarikh yang sah.',
    'date_format' => ':attribute tidak mengikut format :format.',
    'different' => ':attribute dan :other mesti berbeza.',
    'digits' => ':attribute mesti :digits digit.',
    'digits_between' => ':attribute mesti antara :min dan :max digits.',
    'dimensions' => ':attribute mempunyai dimensi imej yang tidak sah.',
    'distinct' => 'Ruangan :attribute mempunyai nilai yang berulang.',
    'email' => ':attribute mesti alamat emel yang sah.',
    'exists' => ':attribute yang dipilih tidak sah.',
    'file' => ':attribute mesti fail.',
    'filled' => 'Ruangan :attribute mesti diisi.',
    'image' => ':attribute mesti gambar.',
    'in' => ':attribute yang dipilih tidak sah.',
    'in_array' => 'Ruangan :attribute tidak wujud dalam :other.',
    'integer' => ':attribute mesti nombor bulat.',
    'ip' => ':attribute mesti alamat IP yang sah.',
    'json' => ':attribute mesti rentetan JSON yang sah.',
    'max' => [
        'numeric' => ':attribute tidak boleh lebih daripada :max.',
        'file' => ':attribute tidak boleh lebih daripada :max kilobytes.',
        'string' => ':attribute tidak boleh lebih daripada :max characters.',
        'array' => ':attribute tidak boleh mempunyai lebih daripada :max items.',
    ],
    'mimes' => ':attribute mesti fail jenis: :values.',
    'mimetypes' => ':attribute mesti fail jenis: :values.',
    'min' => [
        'numeric' => ':attribute mesti sekurang-kurangnya :min.',
        'file' => ':attribute mesti sekurang-kurangnya :min kilobytes.',
        'string' => ':attribute mesti sekurang-kurangnya :min characters.',
        'array' => ':attribute mesti mempunyai sekurang-kurangnya :min items.',
    ],
    'not_in' => ':attribute yang dipilih tidak sah.',
    'numeric' => ':attribute mesti nombor.',
    'present' => 'Ruangan :attribute mesti hadir.',
    'regex' => 'Format :attribute tidak sah.',
    'required' => 'Ruangan :attribute diperlukan.',
    'required_if' => 'Ruangan :attribute diperlukan apabila :other ialah :value.',
    'required_unless' => 'Ruangan :attribute diperlukan kecuali :other ada dalam :values.',
    'required_with' => 'Ruangan :attribute diperlukan apabila :values hadir.',
    'required_with_all' => 'Ruangan :attribute diperlukan apabila :values hadir.',
    'required_without' => 'Ruangan :attribute diperlukan apabila :values tidak hadir.',
    'required_without_all' => 'Ruangan :attribute diperlukan apabila tiada :values hadir.',
    'same' => ':attribute dan :other mesti sepadan.',
    'size' => [
        'numeric' => ':attribute mesti :size.',
        'file' => ':attribute mesti :size kilobytes.',
        'string' => ':attribute mesti :size characters.',
        'array' => ':attribute mesti mengandungi :size items.',
    ],
    'string' => ':attribute mesti rentetan.',
    'timezone' => ':attribute mesti zon waktu yang sah.',
    'unique' => ':attribute telah digunakan.',
    'uploaded' => ':attribute gagal dimuat naik.',
    'url' => 'Format :attribute tidak sah.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Baris bahasa berikut digunakan untuk menukar pemegang tempat atribut
    | dengan sesuatu yang lebih mesra pembaca seperti "Alamat Emel" menggantikan
    | "email". Ini membantu menjadikan mesej lebih jelas.
    |
    */

    'attributes' => [],

    // Logik validasi dalaman untuk Jexactyl
    'internal' => [
        'variable_value' => ':env variable',
        'invalid_password' => 'Kata laluan yang diberikan tidak sah untuk akaun ini.',
    ],
];
