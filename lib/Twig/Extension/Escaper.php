<?php

use Twig\Extension\EscaperExtension;

class_exists('Twig\Extension\EscaperExtension');

@trigger_error(sprintf('Using the "Twig_Extension_Escaper" class is deprecated since Twig version 1.38, use "Twig\Extension\EscaperExtension" instead.'), E_USER_DEPRECATED);

if (\false) {
    class Twig_Extension_Escaper extends EscaperExtension
    {
    }
}
