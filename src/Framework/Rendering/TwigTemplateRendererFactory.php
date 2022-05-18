<?php

declare(strict_types=1);

namespace SocialNews\Framework\Rendering;

use SocialNews\Framework\Csrf\StoredTokenReader;

use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;
use \Twig\TwigFunction;

final class TwigTemplateRendererFactory
{
    private $storedTokenReader;

    private $templateDirectory;

    public function __construct(
        TemplateDirectory $templateDirectory,
        StoredTokenReader $storedTokenReader
    ) {
        $this->templateDirectory = $templateDirectory;
        $this->storedTokenReader = $storedTokenReader;
    }

    public function create(): TwigTemplateRenderer
    {
        $loader = new FilesystemLoader([
            $this->templateDirectory->toString(),
        ]);

        $twigEnvironment = new Environment($loader);
        $twigEnvironment->addFunction(
            new TwigFunction('get_token', function (string $key): string {
                $token = $this->storedTokenReader->read($key);
                return $token->toString();
            })
        );

        return new TwigTemplateRenderer($twigEnvironment);
    }
}
