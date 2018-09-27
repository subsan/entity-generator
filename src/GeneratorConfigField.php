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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

}
