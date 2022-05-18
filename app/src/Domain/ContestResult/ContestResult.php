<?php

declare(strict_types=1);

namespace App\Domain\ContestResult;

class ContestResult implements \JsonSerializable
{
    /**
     * @param int|null $id
     * @param int $responsavel
     * @param string $dataResultado
     * @param int $idSorteio
     * @param int $sorteado
     */
    public function __construct(
        public ?int $id,
        public int $responsavel,
        public string $dataResultado,
        public int $idSorteio,
        public int $sorteado
    )
    {
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'responsavel_sorteio' => $this->responsavel,
            'data_resultado' => $this->dataResultado,
            'sorteio' => $this->idSorteio,
            'sorteado' => $this->sorteado
        ];
    }
}