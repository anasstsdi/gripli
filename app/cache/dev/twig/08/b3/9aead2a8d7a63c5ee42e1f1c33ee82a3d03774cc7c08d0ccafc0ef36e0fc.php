<?php

/* GripliAuthBundle:User:registration.email.twig */
class __TwigTemplate_08b39aead2a8d7a63c5ee42e1f1c33ee82a3d03774cc7c08d0ccafc0ef36e0fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body_text', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        echo "Confirmation d'inscription";
    }

    // line 5
    public function block_body_text($context, array $blocks = array())
    {
        // line 7
        echo "Bonjour ";
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username");
        echo " !

Vous devez confirmé votre inscription en cliquant sur le lien suivant : ";
        // line 9
        echo (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"));
        echo "

Amicalement,
Administrateur de kapstage.com
";
    }

    // line 16
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "GripliAuthBundle:User:registration.email.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  84 => 22,  70 => 17,  23 => 4,  34 => 7,  167 => 41,  128 => 37,  124 => 36,  118 => 34,  110 => 30,  76 => 29,  61 => 24,  114 => 37,  65 => 18,  132 => 48,  97 => 36,  58 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 83,  230 => 82,  227 => 81,  224 => 79,  221 => 77,  219 => 76,  217 => 75,  208 => 73,  204 => 72,  179 => 69,  159 => 42,  143 => 55,  135 => 53,  119 => 42,  102 => 32,  71 => 22,  67 => 17,  63 => 16,  59 => 23,  87 => 25,  94 => 35,  89 => 20,  85 => 22,  75 => 19,  68 => 26,  56 => 9,  93 => 9,  88 => 31,  78 => 50,  46 => 7,  27 => 4,  44 => 8,  25 => 3,  31 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 64,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 38,  142 => 59,  138 => 47,  136 => 56,  121 => 46,  117 => 44,  105 => 29,  91 => 26,  62 => 17,  49 => 10,  21 => 2,  28 => 5,  38 => 8,  26 => 12,  24 => 7,  19 => 1,  79 => 20,  72 => 28,  69 => 25,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 40,  145 => 30,  139 => 45,  131 => 38,  123 => 47,  120 => 39,  115 => 43,  111 => 34,  108 => 36,  101 => 28,  98 => 40,  96 => 31,  83 => 25,  74 => 5,  66 => 16,  55 => 12,  52 => 11,  50 => 10,  43 => 7,  41 => 9,  35 => 16,  32 => 15,  29 => 5,  209 => 82,  203 => 78,  199 => 71,  193 => 73,  189 => 71,  187 => 84,  182 => 70,  176 => 64,  173 => 65,  168 => 72,  164 => 40,  162 => 57,  154 => 39,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 44,  130 => 41,  125 => 38,  122 => 37,  116 => 33,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 25,  95 => 27,  92 => 21,  86 => 30,  82 => 28,  80 => 19,  73 => 19,  64 => 17,  60 => 48,  57 => 13,  54 => 9,  51 => 11,  48 => 7,  45 => 5,  42 => 9,  39 => 3,  36 => 7,  33 => 4,  30 => 5,);
    }
}
