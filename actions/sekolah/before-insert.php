<?php

Validation::run([
    'gugus_depan' => [
        'required','unique:sekolah'
    ]
], $_POST[$table]);