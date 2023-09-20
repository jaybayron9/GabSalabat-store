<?php

namespace Model;
use SQL\QueryBuilder;

class Users extends QueryBuilder {
    protected $columns = [
        'id', 'name', 'phone', 'email', 'email_verify_token', 'email_verified_at', 'password', 'password_reset_token', 'profile_photo_path', 'account_role', 'access_enabled', 'created_at', 'updated_at'
    ];   

    public function table() {
        return $this->setTable('users');
    }
}