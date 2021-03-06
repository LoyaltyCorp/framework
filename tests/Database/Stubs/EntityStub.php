<?php
declare(strict_types=1);

namespace Tests\EoneoPay\Framework\Database\Stubs;

use Doctrine\ORM\Mapping as ORM;
use EoneoPay\Framework\Database\Entities\Entity;

/**
 * @ORM\Entity()
 */
class EntityStub extends Entity
{
    /**
     * @ORM\Id()
     * @ORM\Column(name="id", type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     *
     * @var string
     */
    private $entityId;

    /**
     * @ORM\Column(name="string", type="string", nullable=true)
     *
     * @var string
     */
    private $string;

    /**
     * Get entity id.
     *
     * @return string|null
     */
    public function getEntityId(): ?string
    {
        return $this->entityId;
    }

    /**
     * Get string.
     *
     * @return string|null
     */
    public function getString(): ?string
    {
        return $this->string;
    }

    /**
     * Set string.
     *
     * @param string $string
     *
     * @return \Tests\EoneoPay\Framework\Database\Stubs\EntityStub
     */
    public function setString(string $string): self
    {
        $this->string = $string;

        return $this;
    }

    /**
     * Serialize entity as an array.
     *
     * @return array[]|bool[]|int[]|string[]
     */
    public function toArray(): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    protected function getIdProperty(): string
    {
        return 'entityId';
    }
}
