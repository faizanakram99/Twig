<?php

use Twig\Node\Expression\Binary\OrBinary;

class_exists('Twig\Node\Expression\Binary\OrBinary');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Binary_Or" class is deprecated since Twig version 1.38, use "Twig\Node\Expression\Binary\OrBinary" instead.'), E_USER_DEPRECATED);

if (\false) {
    class Twig_Node_Expression_Binary_Or extends OrBinary
    {
    }
}
