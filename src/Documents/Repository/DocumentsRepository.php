<?php

namespace App\Documents\Repository;

class DocumentsRepository
{
    public function getAll(): array
    {
        return [
          new DocumentDTO("Vendor 1", "123456789", "1000000257", 1, 400.0),
          new DocumentDTO("Vendor 1", "123456789", "1000000260", 2, 100.0, '1000000257'),
          new DocumentDTO("Vendor 1", "123456789", "1000000261", 3, 50.0, '1000000257'),
          new DocumentDTO("Vendor 1", "123456789", "1000000264", 1, 1600.0),
        ];
    }
}