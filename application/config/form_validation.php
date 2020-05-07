<?php
$config = array(
    'users/create' => array(
        array(
            'field' => 'username',
            'label' => 'Felhasználónév',
            'rules' => 'required|max_length[50]|is_unique[users.username]',
            'errors' => array(
                'required' => '%s megadása kötelező!',
                'max_length' => '%s mező értéke nem lehet hosszabb mint 50 karakter!',
                'is_unique' => 'A megadott felhasználónév már használatban van!'
            )
        ),
        array(
            'field' => 'name',
            'label' => 'Név',
            'rules' => 'required',
            'errors' => array(
                'required' => '%s megadása kötelező!'
            )
        ),
        array(
            'field' => 'email',
            'label' => 'E-mail cím',
            'rules' => 'required|valid_email|is_unique[users.email]',
            'errors' => array(
                'required' => '%s megadása kötelező!',
                'valid_email'=> 'Az e-mail cím nem megfelelő formátumú!',
                'is_unique' => 'A megadott e-mail cím már használatban van!'
            )
        ),
        array(
            'field' => 'password',
            'label' => 'Jelszó',
            'rules' => 'required|max_length[16]',
            'errors' => array(
                'required' => '%s megadása kötelező!',
                'max_length' => '%s mező értéke nem lehet hosszabb mint 16 karakter!'
            )
        ),
        array(
            'field' => 'introduction',
            'label' => 'Bemutatkozás',
            'rules' => 'required|max_length[500]',
            'errors' => array(
                'required' => '%s megadása kötelező!',
                'max_length' => '%s mező értéke nem lehet hosszabb mint 500 karakter'
            )
        )
    ),
    'users/edit' => array(
    array(
        'field' => 'username',
        'label' => 'Felhasználónév',
        'rules' => 'required|max_length[50]|callback_is_unique_username_except_id',
        'errors' => array(
            'required' => '%s megadása kötelező!',
            'max_length' => '%s mező értéke nem lehet hosszabb mint 50 karakter!',
            'is_unique' => 'A megadott felhasználónév már használatban van!'
        )
    ),
    array(
        'field' => 'name',
        'label' => 'Név',
        'rules' => 'required',
        'errors' => array(
            'required' => '%s megadása kötelező!'
        )
    ),
    array(
        'field' => 'email',
        'label' => 'E-mail cím',
        'rules' => 'required|valid_email|callback_is_unique_email_except_id',
        'errors' => array(
            'required' => '%s megadása kötelező!',
            'valid_email'=> 'Az e-mail cím nem megfelelő formátumú!',
            'is_unique' => 'A megadott e-mail cím már használatban van!'
        )
    ),
    array(
        'field' => 'password',
        'label' => 'Jelszó',
        'rules' => 'required|max_length[16]',
        'errors' => array(
            'required' => '%s megadása kötelező!',
            'max_length' => '%s mező értéke nem lehet hosszabb mint 16 karakter!'
        )
    ),
    array(
        'field' => 'introduction',
        'label' => 'Bemutatkozás',
        'rules' => 'required|max_length[500]',
        'errors' => array(
            'required' => '%s megadása kötelező!',
            'max_length' => '%s mező értéke nem lehet hosszabb mint 500 karakter'
        )
    )
)
);
