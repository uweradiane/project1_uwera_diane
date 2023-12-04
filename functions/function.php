<?php

function usernameIsValid($user_name)
{
    $result = [
        'isValid' => true,
        'msg' => ''
    ];

    // Your validation logic for username, adjust as needed
    // Example: Check length
    if (strlen($user_name) < 3 || strlen($user_name) > 20) {
        $result = [
            'isValid' => false,
            'msg' => 'Username must be between 3 and 20 characters'
        ];
    }

    return $result;
}

function emailIsValid($email)
{
    // Your email validation logic using a regular expression
    $email_validation_regex = "/^[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/";
    if (!preg_match($email_validation_regex, $email)) {
        return [
            'isValid' => false,
            'msg' => 'Invalid email format'
        ];
    }

    return [
        'isValid' => true,
        'msg' => ''
    ];
}

function passwordIsValid($pwd)
{
    // Your password validation logic, adjust as needed
    // Example: Check length
    if (strlen($pwd) < 6 || strlen($pwd) > 16) {
        return [
            'isValid' => false,
            'msg' => 'Password must be between 6 and 16 characters'
        ];
    }

    return [
        'isValid' => true,
        'msg' => ''
    ];
}

?>
