<?php

declare(strict_types=1);

namespace SocialNews\User\Presentation;

use SocialNews\Framework\Rendering\TemplateRenderer;
use Symfony\Component\HttpFoundation\Response;

final class RegistrationController
{
    private $templateRenderer;
    
    public function __construct(TemplateRenderer $templateRenderer)
    {
        $this->templateRenderer = $templateRenderer;
    }

    public function show(): Response
    {
        $content = $this->templateRenderer->render('Registration.html.twig');
        return new Response($content);
    }
}
