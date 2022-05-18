<?php

declare(strict_types=1);

namespace App\Domain\User;

use JsonSerializable;
use DateTimeImmutable;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;


final class User implements JsonSerializable
{
    /**
     * @param int|null $id
     * @param string $nomeUsuario
     * @param string $emailUsuario
     * @param string $telefoneUsuario
     * @param string|null $senhaUsuario
     * @param string $tipoUsuario
     */
    public function __construct(
        public ?int $id,
        public string $nomeUsuario,
        public string $emailUsuario,
        public string $telefoneUsuario,
        public ?string $senhaUsuario,
        public string $tipoUsuario
    )
    {
    }

    public function jsonSerialize(): array
    {
        return [
            'user_id' => $this->id,
            'user_name' => $this->nomeUsuario,
            'user_email' => $this->emailUsuario,
            'user_telefone' => $this->telefoneUsuario,
            'user_tipo' => $this->tipoUsuario
        ];
    }
}