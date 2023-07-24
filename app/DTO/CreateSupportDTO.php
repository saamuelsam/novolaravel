<?php

namespace App\DTO;

use StoreUpadateSupport;

class CreateSupportDTO 
{
    public function __construct(
        public string $subject,
        public string $status,
        public string $body,
    )
    {

    }

    public static function MakeFromRequest(StoreUpadateSupport $request): self 
    {
        return new self(
            $request->subject,
            'a',
            $request->body,
        );
    }
}