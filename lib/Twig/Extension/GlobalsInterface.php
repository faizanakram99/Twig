<?php

use Twig\Extension\GlobalsInterface;

class_exists('Twig\Extension\GlobalsInterface');

@trigger_error(sprintf('Using the "Twig_Extension_GlobalsInterface" class is deprecated since Twig version 1.38, use "Twig\Extension\GlobalsInterface" instead.'), E_USER_DEPRECATED);

if (\false) {
    class Twig_Extension_GlobalsInterface extends GlobalsInterface
    {
    }
}
