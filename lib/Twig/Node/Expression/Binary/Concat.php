<?php

use Twig\Node\Expression\Binary\ConcatBinary;

class_exists('Twig\Node\Expression\Binary\ConcatBinary');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Binary_Concat" class is deprecated since Twig version 1.38, use "Twig\Node\Expression\Binary\ConcatBinary" instead.'), E_USER_DEPRECATED);

if (\false) {
    class Twig_Node_Expression_Binary_Concat extends ConcatBinary
    {
    }
}
