<?php

namespace Subsan\EntityGenerator;

class Generator
{
    private $config;
    private $twigLoader;

    public function __construct(GeneratorConfig $config, $templatesPath = __DIR__ . '/../templates/')
    {
        $this->config     = $config;
        $this->twigLoader = new \Twig_Loader_Filesystem($templatesPath);
    }

    /**
     * @param string $template
     *
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function getSource($template = 'entity.twig'): string
    {
        $twig = new \Twig_Environment($this->twigLoader, array());
        $twig->addFilter(new \Twig_SimpleFilter('ucfirst', 'ucfirst'));
        $twig->addFilter(new \Twig_SimpleFilter('lcfirst', 'lcfirst'));

        return $twig->render($template, array('config' => $this->config));
    }
}

