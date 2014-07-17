<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_a76670a8dcd22dcd7326a6720688e4eb511f18ccdd59efc36c0f14ff60ff8727 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 160,  386 => 159,  378 => 157,  331 => 140,  417 => 143,  407 => 138,  395 => 135,  382 => 131,  328 => 139,  792 => 488,  775 => 485,  727 => 476,  706 => 473,  690 => 469,  625 => 453,  517 => 404,  449 => 198,  441 => 196,  429 => 188,  422 => 184,  380 => 158,  361 => 152,  241 => 93,  229 => 87,  226 => 84,  172 => 57,  1073 => 656,  1069 => 654,  1055 => 648,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  963 => 604,  959 => 602,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  919 => 587,  911 => 581,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  864 => 558,  854 => 552,  838 => 544,  836 => 543,  824 => 537,  815 => 531,  800 => 523,  790 => 519,  774 => 509,  770 => 507,  762 => 504,  745 => 493,  740 => 491,  737 => 490,  718 => 482,  702 => 472,  698 => 471,  686 => 468,  671 => 465,  664 => 463,  646 => 451,  642 => 449,  636 => 446,  628 => 444,  622 => 452,  591 => 436,  587 => 434,  565 => 430,  530 => 417,  297 => 200,  367 => 155,  353 => 149,  205 => 90,  365 => 125,  358 => 151,  341 => 117,  338 => 116,  319 => 124,  277 => 109,  257 => 103,  251 => 182,  211 => 81,  20 => 1,  620 => 451,  612 => 220,  601 => 446,  585 => 209,  580 => 207,  577 => 206,  574 => 431,  566 => 203,  563 => 429,  559 => 427,  545 => 198,  536 => 419,  532 => 410,  526 => 190,  523 => 189,  518 => 180,  514 => 415,  511 => 166,  474 => 122,  455 => 115,  447 => 113,  421 => 90,  415 => 180,  412 => 126,  406 => 111,  404 => 90,  401 => 172,  391 => 163,  369 => 148,  351 => 141,  347 => 119,  333 => 115,  318 => 86,  310 => 83,  302 => 125,  192 => 53,  330 => 103,  315 => 131,  312 => 130,  306 => 286,  303 => 122,  287 => 77,  280 => 194,  275 => 105,  264 => 74,  231 => 99,  178 => 59,  160 => 38,  150 => 55,  12 => 36,  956 => 271,  953 => 270,  946 => 302,  942 => 300,  933 => 296,  925 => 292,  917 => 291,  914 => 290,  912 => 289,  909 => 580,  901 => 285,  898 => 284,  890 => 281,  887 => 280,  879 => 277,  870 => 560,  868 => 273,  863 => 269,  853 => 261,  848 => 548,  840 => 253,  834 => 249,  832 => 248,  822 => 244,  820 => 243,  816 => 241,  810 => 492,  807 => 491,  805 => 236,  802 => 235,  799 => 234,  791 => 262,  788 => 486,  778 => 267,  773 => 264,  771 => 232,  768 => 231,  765 => 230,  760 => 222,  743 => 217,  738 => 214,  732 => 487,  720 => 211,  717 => 210,  713 => 209,  700 => 205,  688 => 202,  682 => 467,  679 => 466,  676 => 467,  673 => 198,  668 => 464,  663 => 195,  657 => 193,  641 => 189,  629 => 454,  626 => 443,  607 => 218,  603 => 439,  600 => 178,  597 => 177,  594 => 212,  551 => 424,  548 => 176,  546 => 423,  543 => 174,  531 => 225,  513 => 230,  482 => 136,  479 => 135,  471 => 129,  468 => 128,  460 => 123,  451 => 120,  434 => 118,  424 => 91,  418 => 112,  381 => 157,  379 => 154,  376 => 153,  373 => 156,  370 => 101,  356 => 122,  354 => 142,  343 => 146,  340 => 145,  326 => 138,  323 => 128,  320 => 127,  309 => 129,  301 => 117,  296 => 121,  274 => 110,  265 => 105,  261 => 73,  236 => 42,  228 => 88,  216 => 79,  766 => 246,  763 => 245,  761 => 244,  757 => 221,  754 => 499,  742 => 492,  736 => 238,  733 => 237,  730 => 236,  728 => 235,  723 => 233,  711 => 231,  708 => 230,  705 => 480,  677 => 465,  660 => 464,  655 => 457,  647 => 191,  632 => 187,  627 => 207,  610 => 181,  589 => 203,  581 => 201,  575 => 199,  572 => 204,  570 => 164,  567 => 414,  558 => 160,  554 => 224,  552 => 188,  544 => 185,  540 => 160,  534 => 418,  528 => 160,  522 => 406,  507 => 165,  504 => 164,  498 => 173,  495 => 172,  487 => 169,  469 => 167,  462 => 202,  453 => 199,  448 => 119,  439 => 195,  436 => 149,  427 => 147,  411 => 140,  402 => 107,  393 => 168,  384 => 132,  360 => 128,  349 => 120,  339 => 114,  334 => 141,  324 => 112,  317 => 107,  307 => 128,  304 => 81,  300 => 121,  298 => 120,  295 => 100,  291 => 80,  286 => 112,  272 => 91,  262 => 93,  256 => 96,  252 => 3,  206 => 57,  190 => 49,  113 => 38,  279 => 77,  259 => 103,  247 => 75,  244 => 43,  198 => 55,  195 => 84,  107 => 41,  53 => 12,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 657,  1074 => 304,  1067 => 299,  1064 => 651,  1056 => 293,  1053 => 292,  1051 => 647,  1048 => 646,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 624,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 607,  967 => 606,  964 => 255,  961 => 254,  958 => 253,  955 => 600,  952 => 251,  950 => 269,  947 => 597,  939 => 243,  936 => 297,  934 => 241,  931 => 295,  923 => 588,  920 => 235,  918 => 234,  915 => 233,  903 => 286,  900 => 228,  897 => 227,  894 => 226,  892 => 282,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  873 => 217,  865 => 272,  862 => 557,  860 => 268,  857 => 267,  849 => 206,  846 => 205,  844 => 546,  841 => 203,  833 => 199,  830 => 539,  828 => 538,  825 => 196,  817 => 192,  814 => 191,  812 => 530,  809 => 189,  801 => 185,  798 => 184,  796 => 489,  793 => 182,  785 => 232,  783 => 177,  780 => 513,  772 => 249,  769 => 171,  767 => 170,  764 => 505,  756 => 165,  753 => 220,  751 => 163,  749 => 479,  746 => 478,  739 => 239,  729 => 155,  724 => 484,  721 => 153,  715 => 151,  712 => 150,  710 => 475,  707 => 208,  699 => 142,  697 => 224,  696 => 476,  695 => 139,  694 => 470,  689 => 137,  683 => 135,  680 => 134,  678 => 468,  666 => 126,  662 => 125,  658 => 124,  649 => 462,  643 => 120,  638 => 211,  635 => 226,  619 => 183,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 204,  576 => 101,  564 => 162,  557 => 96,  555 => 200,  550 => 94,  547 => 186,  527 => 408,  524 => 90,  512 => 84,  509 => 228,  501 => 163,  496 => 79,  493 => 155,  490 => 154,  480 => 75,  478 => 74,  470 => 121,  464 => 125,  461 => 70,  459 => 116,  442 => 151,  437 => 61,  428 => 116,  423 => 146,  414 => 144,  408 => 176,  405 => 137,  403 => 48,  400 => 47,  390 => 136,  388 => 134,  374 => 128,  355 => 150,  350 => 120,  344 => 24,  337 => 90,  316 => 16,  311 => 83,  293 => 120,  290 => 119,  288 => 118,  285 => 100,  281 => 114,  278 => 106,  271 => 190,  266 => 366,  263 => 4,  255 => 101,  253 => 100,  250 => 44,  248 => 97,  225 => 87,  222 => 83,  220 => 81,  215 => 102,  210 => 77,  207 => 76,  126 => 55,  233 => 87,  212 => 60,  200 => 72,  184 => 63,  180 => 70,  174 => 74,  165 => 83,  153 => 77,  146 => 58,  140 => 51,  134 => 39,  129 => 59,  77 => 20,  81 => 24,  399 => 139,  396 => 138,  394 => 168,  387 => 164,  383 => 150,  377 => 129,  371 => 156,  366 => 150,  362 => 124,  359 => 123,  357 => 139,  352 => 121,  345 => 147,  342 => 137,  335 => 134,  329 => 131,  325 => 129,  321 => 135,  308 => 109,  294 => 111,  289 => 113,  283 => 115,  276 => 111,  270 => 102,  267 => 101,  260 => 104,  249 => 92,  245 => 83,  239 => 97,  237 => 91,  234 => 90,  218 => 97,  214 => 63,  202 => 94,  191 => 67,  188 => 90,  185 => 66,  177 => 69,  170 => 56,  155 => 47,  90 => 27,  194 => 68,  181 => 65,  175 => 58,  169 => 66,  161 => 58,  148 => 60,  137 => 52,  701 => 418,  692 => 474,  687 => 409,  685 => 405,  675 => 132,  670 => 400,  665 => 196,  661 => 396,  654 => 123,  650 => 192,  644 => 190,  640 => 448,  634 => 456,  624 => 224,  616 => 440,  606 => 449,  599 => 215,  592 => 354,  588 => 175,  586 => 349,  584 => 173,  578 => 432,  568 => 338,  561 => 161,  553 => 425,  549 => 411,  542 => 421,  537 => 159,  529 => 409,  525 => 157,  520 => 312,  515 => 305,  503 => 81,  497 => 156,  492 => 298,  485 => 124,  477 => 288,  467 => 166,  463 => 117,  456 => 68,  454 => 121,  450 => 114,  446 => 197,  440 => 263,  435 => 262,  433 => 148,  431 => 189,  426 => 58,  416 => 145,  410 => 113,  398 => 136,  385 => 159,  368 => 126,  363 => 153,  348 => 140,  336 => 189,  332 => 88,  327 => 126,  322 => 184,  313 => 110,  305 => 108,  299 => 116,  292 => 91,  284 => 76,  268 => 107,  258 => 187,  242 => 101,  232 => 88,  213 => 78,  197 => 69,  186 => 72,  152 => 46,  127 => 35,  104 => 31,  100 => 36,  84 => 25,  70 => 15,  23 => 2,  34 => 5,  167 => 71,  128 => 42,  124 => 25,  118 => 49,  110 => 22,  76 => 17,  61 => 12,  114 => 36,  65 => 22,  132 => 28,  97 => 41,  58 => 14,  273 => 85,  269 => 107,  254 => 102,  243 => 98,  240 => 72,  238 => 312,  235 => 89,  230 => 62,  227 => 86,  224 => 61,  221 => 80,  219 => 84,  217 => 56,  208 => 76,  204 => 75,  179 => 76,  159 => 57,  143 => 56,  135 => 46,  119 => 40,  102 => 30,  71 => 13,  67 => 16,  63 => 18,  59 => 13,  87 => 26,  94 => 21,  89 => 31,  85 => 23,  75 => 18,  68 => 30,  56 => 12,  93 => 28,  88 => 24,  78 => 19,  46 => 10,  27 => 3,  44 => 9,  25 => 35,  31 => 4,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 53,  158 => 80,  156 => 58,  151 => 61,  142 => 30,  138 => 47,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 25,  62 => 14,  49 => 11,  21 => 2,  28 => 3,  38 => 7,  26 => 6,  24 => 3,  19 => 1,  79 => 18,  72 => 18,  69 => 16,  47 => 8,  40 => 11,  37 => 6,  22 => 2,  246 => 96,  157 => 37,  145 => 74,  139 => 63,  131 => 61,  123 => 61,  120 => 31,  115 => 45,  111 => 47,  108 => 33,  101 => 30,  98 => 29,  96 => 30,  83 => 33,  74 => 27,  66 => 21,  55 => 9,  52 => 12,  50 => 22,  43 => 9,  41 => 7,  35 => 6,  32 => 5,  29 => 3,  209 => 92,  203 => 73,  199 => 93,  193 => 83,  189 => 66,  187 => 64,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 63,  149 => 60,  147 => 43,  144 => 42,  141 => 48,  133 => 45,  130 => 46,  125 => 41,  122 => 45,  116 => 57,  112 => 105,  109 => 27,  106 => 51,  103 => 40,  99 => 23,  95 => 27,  92 => 43,  86 => 37,  82 => 19,  80 => 32,  73 => 16,  64 => 17,  60 => 20,  57 => 19,  54 => 19,  51 => 13,  48 => 16,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
