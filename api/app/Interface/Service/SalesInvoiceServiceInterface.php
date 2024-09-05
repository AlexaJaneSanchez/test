<?php

namespace App\Interface\Service;

interface SalesInvoiceServiceInterface
{
    public function findSalesInvoices();

    public function findSalesInvoiceById(int $id);

    public function createSalesInvoice(object $payload);

    public function updateSalesInvoice(object $payload, int $id);

    public function removeSalesInvoice(int $id);
}