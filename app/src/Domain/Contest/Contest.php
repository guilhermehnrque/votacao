<?php

declare(strict_types=1);

namespace App\Domain\Contest;

use JsonSerializable;

class Contest implements JsonSerializable
{
    /**
     * @param int|null $idSorteio
     * @param string $dataSorteio
     * @param string $premiacaoSorteiro
     * @param string $codigoSorteio
     */
    public function __construct(
        public ?int $idSorteio,
        public string $dataSorteio,
        public string $premiacaoSorteiro,
        public string $codigoSorteio
    )
    {
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->idSorteio,
            'data' => $this->dataSorteio,
            'premiacao' => $this->premiacaoSorteiro,
            'codigo' => $this->codigoSorteio
        ];
    }
}