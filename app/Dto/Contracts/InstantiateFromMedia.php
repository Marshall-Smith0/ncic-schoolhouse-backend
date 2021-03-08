<?php


namespace App\Dto\Contracts;

use App\Models\Contracts\MediaModelContract;
use App\Services\EscolaLMS\Contracts\MediaContract;

interface InstantiateFromMedia
{
    public static function instantiateFromMedia(MediaContract $media, MediaModelContract $file): self;
}
