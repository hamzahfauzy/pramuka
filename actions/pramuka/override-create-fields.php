<?php

if(get_role(auth()->user->id)->name == 'User')
{
    unset($fields['user_id']);
}

return $fields;