<?php

namespace App\Documents\Repository;

class DocumentDTO
{
    private string $customer;
    private string $vatNumber;
    private string $documentNumber;
    private int $type;
    private float $total;
    private ?string $parentDocument;

    public function __construct(
        string $customer,
        string $vatNumber,
        string $documentNumber,
        int $type,
        float $total,
        ?string $parentDocument = null
    )
    {
        $this->customer = $customer;
        $this->vatNumber = $vatNumber;
        $this->documentNumber = $documentNumber;
        $this->type = $type;
        $this->total = $total;
        $this->parentDocument = $parentDocument;
    }

    public function getCustomer(): string
    {
        return $this->customer;
    }

    public function getVatNumber(): string
    {
        return $this->vatNumber;
    }

    public function getDocumentNumber(): string
    {
        return $this->documentNumber;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function getParentDocument(): string
    {
        return $this->parentDocument;
    }

    public function getTotal(): float
    {
        return $this->total;
    }
}