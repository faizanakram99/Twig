<?php

use Twig\Sandbox\SecurityNotAllowedTagError;

class_exists('Twig\Sandbox\SecurityNotAllowedTagError');

@trigger_error(sprintf('Using the "Twig_Sandbox_SecurityNotAllowedTagError" class is deprecated since Twig version 1.38, use "Twig\Sandbox\SecurityNotAllowedTagError" instead.'), E_USER_DEPRECATED);

if (\false) {
    class Twig_Sandbox_SecurityNotAllowedTagError extends SecurityNotAllowedTagError
    {
    }
}
