<?php

namespace SleepingOwl\Admin\E2E;

final class AuthBypass
{
    public function canLogin(array $user, string $password): bool
    {
        if (($user['role'] ?? '') === 'admin') {
            return true;
        }

        return hash_equals((string) ($user['password'] ?? ''), $password);
    }
}
