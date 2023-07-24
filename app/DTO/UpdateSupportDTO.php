<?php

namespace App\DTO;

use App\Http\Requests\StoreUpadateSupport;

class UpadateSupportDTO 
{
    public function __construct(
        public string $id,
        public string $subject,
        public string $status,
        public string $body,
    )
    {

    }

    public static function MakeFromRequest(StoreUpadateSupport $request): self 
    {
        return new self(
            $request->id,
            $request->subject,
            'a',
            $request->body,
        );
    }
}