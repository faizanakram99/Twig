<?php

use Twig\Sandbox\SecurityNotAllowedMethodError;

class_exists('Twig\Sandbox\SecurityNotAllowedMethodError');

@trigger_error(sprintf('Using the "Twig_Sandbox_SecurityNotAllowedMethodError" class is deprecated since Twig version 1.38, use "Twig\Sandbox\SecurityNotAllowedMethodError" instead.'), E_USER_DEPRECATED);

if (\false) {
    class Twig_Sandbox_SecurityNotAllowedMethodError extends SecurityNotAllowedMethodError
    {
    }
}
