<?php
$id = $_GET['id'];

Validation::run([
    'gugus_depan' => [
        'required','unique:sekolah,id,'.$id
    ]
], $_POST[$table]);