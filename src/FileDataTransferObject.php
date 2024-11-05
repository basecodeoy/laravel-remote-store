<?php

declare(strict_types=1);

namespace BaseCodeOy\RemoteStore;

use Spatie\DataTransferObject\DataTransferObject;

final class FileDataTransferObject extends DataTransferObject
{
    public string $name;

    public array $data;

    public ?string $hash = null;
}
