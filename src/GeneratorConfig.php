<?php

namespace Subsan\EntityGenerator;

use Symfony\Component\Yaml\Yaml;

class GeneratorConfig
{
    /**
     * @var string Name of generating class
     */
    private $name;

    /**
     * @var string Namespace for class file
     */
    private $namespace;

    /**
     * @var string Parent class
     */
    private $extends;

    /**
     * @var GeneratorConfigField[] EntityFields
     */
    private $fields;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    public function setNamespace($namespace): self
    {
        $this->namespace = $namespace;

        return $this;
    }

    public function getExtends(): string
    {
        return $this->extends;
    }

    public function setExtends($extends): self
    {
        $this->extends = $extends;

        return $this;
    }

    public function getFields(): array
    {
        return $this->fields;
    }

    public function setFields($fields): self
    {
        $this->fields = $fields;

        return $this;
    }

    public function getFromYAMLFile(string $filename): GeneratorConfig
    {
        $fileArray = Yaml::parseFile($filename);

        $fields = array();
        foreach ($fileArray['fields'] as $fieldName => $field) {
            $fieldClass = new GeneratorConfigField();
            $fieldClass->setName($fieldName)
                ->setType($field['type'])
                ->setDescription($field['description'] ?? '');

            $fields[] = $fieldClass;
        }
        $this->setName($fileArray['name'])
            ->setNamespace($fileArray['namespace'] ?? '')
            ->setExtends($fileArray['extends'] ?? '')
            ->setFields($fields);

        return $this;
    }

}
