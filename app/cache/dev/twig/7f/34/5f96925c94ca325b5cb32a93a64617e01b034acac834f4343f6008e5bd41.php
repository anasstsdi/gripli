<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_7f345f96925c94ca325b5cb32a93a64617e01b034acac834f4343f6008e5bd41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars"), "errors")) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 103,  315 => 98,  312 => 97,  306 => 95,  303 => 94,  287 => 89,  280 => 87,  275 => 86,  264 => 82,  231 => 69,  178 => 46,  160 => 40,  150 => 34,  12 => 36,  956 => 271,  953 => 270,  946 => 302,  942 => 300,  933 => 296,  925 => 292,  917 => 291,  914 => 290,  912 => 289,  909 => 288,  901 => 285,  898 => 284,  890 => 281,  887 => 280,  879 => 277,  870 => 274,  868 => 273,  863 => 269,  853 => 261,  848 => 258,  840 => 253,  834 => 249,  832 => 248,  822 => 244,  820 => 243,  816 => 241,  810 => 238,  807 => 237,  805 => 236,  802 => 235,  799 => 234,  791 => 262,  788 => 233,  778 => 267,  773 => 264,  771 => 232,  768 => 231,  765 => 230,  760 => 222,  743 => 217,  738 => 214,  732 => 213,  720 => 211,  717 => 210,  713 => 209,  700 => 205,  688 => 202,  682 => 201,  679 => 200,  676 => 199,  673 => 198,  668 => 197,  663 => 195,  657 => 193,  641 => 189,  629 => 186,  626 => 184,  607 => 180,  603 => 179,  600 => 178,  597 => 177,  594 => 176,  551 => 221,  548 => 176,  546 => 175,  543 => 174,  531 => 225,  513 => 230,  482 => 136,  479 => 135,  471 => 129,  468 => 128,  460 => 123,  451 => 120,  434 => 118,  424 => 114,  418 => 112,  381 => 105,  379 => 104,  376 => 103,  373 => 102,  370 => 101,  356 => 126,  354 => 101,  343 => 92,  340 => 91,  326 => 86,  323 => 85,  320 => 84,  309 => 82,  301 => 80,  296 => 151,  274 => 53,  265 => 51,  261 => 50,  236 => 42,  228 => 41,  216 => 35,  766 => 246,  763 => 245,  761 => 244,  757 => 221,  754 => 241,  742 => 240,  736 => 238,  733 => 237,  730 => 236,  728 => 235,  723 => 233,  711 => 231,  708 => 230,  705 => 229,  677 => 221,  660 => 194,  655 => 218,  647 => 191,  632 => 187,  627 => 207,  610 => 181,  589 => 203,  581 => 201,  575 => 199,  572 => 198,  570 => 164,  567 => 196,  558 => 160,  554 => 224,  552 => 188,  544 => 185,  540 => 160,  534 => 162,  528 => 160,  522 => 156,  507 => 156,  504 => 155,  498 => 173,  495 => 172,  487 => 169,  469 => 167,  462 => 158,  453 => 157,  448 => 119,  439 => 150,  436 => 149,  427 => 147,  411 => 143,  402 => 107,  393 => 137,  384 => 106,  360 => 128,  349 => 120,  339 => 114,  334 => 112,  324 => 110,  317 => 107,  307 => 104,  304 => 81,  300 => 93,  298 => 101,  295 => 100,  291 => 80,  286 => 98,  272 => 91,  262 => 81,  256 => 79,  252 => 85,  206 => 57,  190 => 49,  113 => 39,  279 => 77,  259 => 87,  247 => 75,  244 => 43,  198 => 94,  195 => 93,  107 => 48,  53 => 18,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 269,  947 => 249,  939 => 243,  936 => 297,  934 => 241,  931 => 295,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 286,  900 => 228,  897 => 227,  894 => 226,  892 => 282,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  873 => 217,  865 => 272,  862 => 212,  860 => 268,  857 => 267,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 246,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 233,  793 => 182,  785 => 232,  783 => 177,  780 => 303,  772 => 249,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 220,  751 => 163,  749 => 218,  746 => 161,  739 => 239,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 208,  699 => 142,  697 => 224,  696 => 204,  695 => 139,  694 => 223,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  666 => 126,  662 => 125,  658 => 124,  649 => 122,  643 => 120,  638 => 211,  635 => 188,  619 => 183,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 204,  576 => 101,  564 => 162,  557 => 96,  555 => 95,  550 => 94,  547 => 186,  527 => 91,  524 => 90,  512 => 84,  509 => 228,  501 => 154,  496 => 79,  493 => 143,  490 => 142,  480 => 75,  478 => 74,  470 => 73,  464 => 125,  461 => 70,  459 => 69,  442 => 151,  437 => 61,  428 => 116,  423 => 146,  414 => 144,  408 => 109,  405 => 108,  403 => 48,  400 => 47,  390 => 136,  388 => 42,  374 => 128,  355 => 122,  350 => 26,  344 => 24,  337 => 90,  316 => 16,  311 => 83,  293 => 90,  290 => 90,  288 => 79,  285 => 78,  281 => 96,  278 => 95,  271 => 374,  266 => 366,  263 => 365,  255 => 353,  253 => 78,  250 => 44,  248 => 336,  225 => 67,  222 => 66,  220 => 65,  215 => 102,  210 => 270,  207 => 33,  126 => 48,  233 => 304,  212 => 76,  200 => 31,  184 => 48,  180 => 66,  174 => 154,  165 => 77,  153 => 55,  146 => 181,  140 => 52,  134 => 28,  129 => 49,  77 => 31,  81 => 33,  399 => 139,  396 => 138,  394 => 156,  387 => 135,  383 => 150,  377 => 37,  371 => 127,  366 => 150,  362 => 148,  359 => 140,  357 => 139,  352 => 121,  345 => 118,  342 => 116,  335 => 21,  329 => 126,  325 => 125,  321 => 100,  308 => 13,  294 => 111,  289 => 109,  283 => 97,  276 => 393,  270 => 84,  267 => 128,  260 => 363,  249 => 89,  245 => 83,  239 => 117,  237 => 71,  234 => 84,  218 => 77,  214 => 63,  202 => 55,  191 => 26,  188 => 25,  185 => 63,  177 => 65,  170 => 61,  155 => 73,  90 => 36,  194 => 52,  181 => 232,  175 => 45,  169 => 78,  161 => 75,  148 => 53,  137 => 29,  701 => 418,  692 => 412,  687 => 409,  685 => 405,  675 => 132,  670 => 400,  665 => 196,  661 => 396,  654 => 123,  650 => 192,  644 => 190,  640 => 119,  634 => 209,  624 => 374,  616 => 182,  606 => 362,  599 => 358,  592 => 354,  588 => 175,  586 => 349,  584 => 173,  578 => 200,  568 => 338,  561 => 161,  553 => 329,  549 => 187,  542 => 320,  537 => 159,  529 => 159,  525 => 157,  520 => 312,  515 => 305,  503 => 81,  497 => 300,  492 => 298,  485 => 293,  477 => 288,  467 => 166,  463 => 280,  456 => 68,  454 => 121,  450 => 64,  446 => 266,  440 => 263,  435 => 262,  433 => 148,  431 => 257,  426 => 58,  416 => 145,  410 => 110,  398 => 236,  385 => 41,  368 => 126,  363 => 32,  348 => 136,  336 => 189,  332 => 88,  327 => 102,  322 => 184,  313 => 15,  305 => 175,  299 => 8,  292 => 91,  284 => 167,  268 => 373,  258 => 354,  242 => 82,  232 => 78,  213 => 126,  197 => 30,  186 => 239,  152 => 92,  127 => 52,  104 => 34,  100 => 57,  84 => 34,  70 => 27,  23 => 11,  34 => 17,  167 => 60,  128 => 37,  124 => 51,  118 => 34,  110 => 63,  76 => 18,  61 => 26,  114 => 44,  65 => 25,  132 => 57,  97 => 56,  58 => 25,  273 => 85,  269 => 94,  254 => 46,  243 => 73,  240 => 72,  238 => 312,  235 => 114,  230 => 303,  227 => 109,  224 => 39,  221 => 38,  219 => 129,  217 => 64,  208 => 74,  204 => 267,  179 => 224,  159 => 196,  143 => 55,  135 => 51,  119 => 108,  102 => 60,  71 => 23,  67 => 30,  63 => 20,  59 => 24,  87 => 35,  94 => 41,  89 => 17,  85 => 22,  75 => 31,  68 => 24,  56 => 23,  93 => 36,  88 => 67,  78 => 32,  46 => 8,  27 => 14,  44 => 18,  25 => 3,  31 => 23,  201 => 92,  196 => 68,  183 => 82,  171 => 44,  166 => 80,  163 => 62,  158 => 74,  156 => 38,  151 => 52,  142 => 30,  138 => 47,  136 => 70,  121 => 52,  117 => 45,  105 => 41,  91 => 45,  62 => 14,  49 => 23,  21 => 11,  28 => 22,  38 => 5,  26 => 14,  24 => 13,  19 => 11,  79 => 32,  72 => 30,  69 => 29,  47 => 14,  40 => 19,  37 => 24,  22 => 12,  246 => 90,  157 => 57,  145 => 30,  139 => 69,  131 => 160,  123 => 47,  120 => 46,  115 => 53,  111 => 43,  108 => 42,  101 => 39,  98 => 42,  96 => 37,  83 => 15,  74 => 20,  66 => 28,  55 => 24,  52 => 23,  50 => 21,  43 => 7,  41 => 6,  35 => 16,  32 => 15,  29 => 15,  209 => 58,  203 => 32,  199 => 265,  193 => 92,  189 => 240,  187 => 64,  182 => 23,  176 => 309,  173 => 62,  168 => 43,  164 => 59,  162 => 41,  154 => 189,  149 => 72,  147 => 90,  144 => 70,  141 => 72,  133 => 69,  130 => 49,  125 => 46,  122 => 46,  116 => 48,  112 => 105,  109 => 46,  106 => 64,  103 => 44,  99 => 38,  95 => 19,  92 => 27,  86 => 28,  82 => 34,  80 => 14,  73 => 17,  64 => 27,  60 => 18,  57 => 18,  54 => 16,  51 => 16,  48 => 15,  45 => 14,  42 => 20,  39 => 25,  36 => 16,  33 => 16,  30 => 2,);
    }
}
