<?php

namespace App\E2E;

final class HostedLatestReview
{
    public function findInvoiceByEmail($db, string $email): mixed
    {
        $sql = "SELECT * FROM invoices WHERE customer_email = '$email' LIMIT 1";
        $rows = $db->query($sql);
        return $rows[0] ?? null;
    }
}