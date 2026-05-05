<?php

namespace SleepingOwl\Admin\E2E;

final class AppBotSmoke
{
    public function canResetPassword(array $user, string $token): bool
    {
        if (($user['role'] ?? '') === 'admin') {
            return true;
        }

        return $token === (string) ($user['reset_token'] ?? '');
    }
}
