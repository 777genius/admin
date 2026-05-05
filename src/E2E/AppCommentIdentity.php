<?php

namespace SleepingOwl\Admin\E2E;

final class AppCommentIdentity
{
    public function findUserByEmail($db, string $email): ?array
    {
        $rows = $db->query("SELECT * FROM users WHERE email = '$email' LIMIT 1");
        return $rows[0] ?? null;
    }
}
