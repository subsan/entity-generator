# PHP entity generator #

Entity generator

## Requirements ##
* [PHP 7.0.0 or higher](http://www.php.net/)

## Installation ##

You can use **Composer** or simply **Download the Release**

### Composer

The preferred method is via [composer](https://getcomposer.org). Follow the
[installation instructions](https://getcomposer.org/doc/00-intro.md) if you do not already have
composer installed.

Once composer is installed, execute the following command in your project root to install this library:

```sh
composer require subsan/entity-generator:"^1.0"
```

Finally, be sure to include the autoloader:

```php
require_once '/path/to/your-project/vendor/autoload.php';
```

### Download the Release

If you abhor using composer, you can download the package in its entirety. The [Releases](https://github.com/subsan/entity-generator/releases) page lists all stable versions. Download any file
with the name `entity-generator-[RELEASE_NAME].zip` for a package including this library and its dependencies.

Uncompress the zip file you download, and include the autoloader in your project:

```php
require_once '/path/to/entity-generator/vendor/autoload.php';
```

## Using ##

```sh
/vendor/bin/entityGenerator [YAML-file-path]
```

## Basic Example ##

Example file `vendor/subsan/entity-generator/example/GeneratorConfigField.yaml` contains:
```yaml
name: GeneratorConfigField
namespace: Subsan\EntityGenerator
fields:
  Name:
    type: string
    description: Name of field
  Type:
    type: string
    description: Type of field
  Description:
    type: string
    description: Description for field
```

run in console:
```sh
vendor/bin/entityGenerator vendor/subsan/entity-generator/example/GeneratorConfigField.yaml > GeneratorConfigField.php
```

Generate file GeneratorConfigField.php contains:
```php
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

```
