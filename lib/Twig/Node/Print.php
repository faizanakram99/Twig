<?php

use Twig\Node\PrintNode;

class_exists('Twig\Node\PrintNode');

@trigger_error(sprintf('Using the "Twig_Node_Print" class is deprecated since Twig version 1.38, use "Twig\Node\PrintNode" instead.'), E_USER_DEPRECATED);

if (\false) {
    class Twig_Node_Print extends PrintNode
    {
    }
}
