<?php

namespace Subsan\EntityGenerator;

class GeneratorConfigField
{
    /**
     * @var string Name of field
     */
    private $name;

    /**
     * @var string Type of field
     */
    private $type;

    /**
     * @var string Description for field
     */
    private $description;

    /**
     * @var boolean Is null awailable
     */
    private $setNull;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSetNull(): bool
    {
        return $this->setNull;
    }

    public function setSetNull(bool $setNull): self
    {
        $this->setNull = $setNull;

        return $this;
    }

}
