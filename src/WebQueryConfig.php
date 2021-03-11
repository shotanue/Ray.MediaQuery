<?php

declare(strict_types=1);

namespace Ray\MediaQuery;

use function file_get_contents;
use function json_decode;

final class WebQueryConfig
{
    /** @var Queries */
    public $queries;

    /** @var array<string, array{method: string, path: string}> */
    public $apis = [];

    public function __construct(Queries $mediaQueries, string $mediaQueryJson)
    {
        $this->queries = $mediaQueries;
        $json = (array) json_decode((string) file_get_contents($mediaQueryJson));
        foreach ($json['webQuery'] as $item) {
            $this->apis[$item->id] = ['method' => $item->method, 'path' => $item->path];
        }
    }
}
