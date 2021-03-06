<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_5e7f9671fe903a12f73b495b607625af91b06336f307180f4509e4822df3cb94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 90,  365 => 141,  358 => 139,  341 => 131,  338 => 130,  319 => 124,  277 => 109,  257 => 103,  251 => 101,  211 => 81,  20 => 1,  620 => 223,  612 => 220,  601 => 216,  585 => 209,  580 => 207,  577 => 206,  574 => 205,  566 => 203,  563 => 202,  559 => 201,  545 => 198,  536 => 194,  532 => 192,  526 => 190,  523 => 189,  518 => 180,  514 => 167,  511 => 166,  474 => 122,  455 => 115,  447 => 113,  421 => 90,  415 => 127,  412 => 126,  406 => 111,  404 => 90,  401 => 89,  391 => 163,  369 => 148,  351 => 135,  347 => 134,  333 => 132,  318 => 86,  310 => 83,  302 => 79,  192 => 53,  330 => 103,  315 => 123,  312 => 97,  306 => 95,  303 => 94,  287 => 77,  280 => 87,  275 => 86,  264 => 74,  231 => 99,  178 => 48,  160 => 38,  150 => 35,  12 => 36,  956 => 271,  953 => 270,  946 => 302,  942 => 300,  933 => 296,  925 => 292,  917 => 291,  914 => 290,  912 => 289,  909 => 288,  901 => 285,  898 => 284,  890 => 281,  887 => 280,  879 => 277,  870 => 274,  868 => 273,  863 => 269,  853 => 261,  848 => 258,  840 => 253,  834 => 249,  832 => 248,  822 => 244,  820 => 243,  816 => 241,  810 => 238,  807 => 237,  805 => 236,  802 => 235,  799 => 234,  791 => 262,  788 => 233,  778 => 267,  773 => 264,  771 => 232,  768 => 231,  765 => 230,  760 => 222,  743 => 217,  738 => 214,  732 => 213,  720 => 211,  717 => 210,  713 => 209,  700 => 205,  688 => 202,  682 => 201,  679 => 200,  676 => 199,  673 => 198,  668 => 197,  663 => 195,  657 => 193,  641 => 189,  629 => 186,  626 => 184,  607 => 218,  603 => 179,  600 => 178,  597 => 177,  594 => 212,  551 => 199,  548 => 176,  546 => 175,  543 => 174,  531 => 225,  513 => 230,  482 => 136,  479 => 135,  471 => 129,  468 => 128,  460 => 123,  451 => 120,  434 => 118,  424 => 91,  418 => 112,  381 => 157,  379 => 154,  376 => 153,  373 => 102,  370 => 101,  356 => 126,  354 => 142,  343 => 132,  340 => 136,  326 => 129,  323 => 125,  320 => 87,  309 => 120,  301 => 117,  296 => 151,  274 => 53,  265 => 106,  261 => 73,  236 => 42,  228 => 88,  216 => 35,  766 => 246,  763 => 245,  761 => 244,  757 => 221,  754 => 241,  742 => 240,  736 => 238,  733 => 237,  730 => 236,  728 => 235,  723 => 233,  711 => 231,  708 => 230,  705 => 229,  677 => 221,  660 => 194,  655 => 218,  647 => 191,  632 => 187,  627 => 207,  610 => 181,  589 => 203,  581 => 201,  575 => 199,  572 => 204,  570 => 164,  567 => 196,  558 => 160,  554 => 224,  552 => 188,  544 => 185,  540 => 160,  534 => 162,  528 => 160,  522 => 156,  507 => 165,  504 => 164,  498 => 173,  495 => 172,  487 => 169,  469 => 167,  462 => 158,  453 => 157,  448 => 119,  439 => 150,  436 => 149,  427 => 147,  411 => 143,  402 => 107,  393 => 168,  384 => 106,  360 => 128,  349 => 120,  339 => 114,  334 => 112,  324 => 110,  317 => 107,  307 => 82,  304 => 81,  300 => 93,  298 => 101,  295 => 100,  291 => 80,  286 => 98,  272 => 91,  262 => 105,  256 => 79,  252 => 3,  206 => 57,  190 => 49,  113 => 44,  279 => 77,  259 => 87,  247 => 75,  244 => 43,  198 => 55,  195 => 84,  107 => 41,  53 => 10,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 269,  947 => 249,  939 => 243,  936 => 297,  934 => 241,  931 => 295,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 286,  900 => 228,  897 => 227,  894 => 226,  892 => 282,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  873 => 217,  865 => 272,  862 => 212,  860 => 268,  857 => 267,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 246,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 233,  793 => 182,  785 => 232,  783 => 177,  780 => 303,  772 => 249,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 220,  751 => 163,  749 => 218,  746 => 161,  739 => 239,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 208,  699 => 142,  697 => 224,  696 => 204,  695 => 139,  694 => 223,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  666 => 126,  662 => 125,  658 => 124,  649 => 122,  643 => 120,  638 => 211,  635 => 226,  619 => 183,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 204,  576 => 101,  564 => 162,  557 => 96,  555 => 200,  550 => 94,  547 => 186,  527 => 91,  524 => 90,  512 => 84,  509 => 228,  501 => 163,  496 => 79,  493 => 155,  490 => 154,  480 => 75,  478 => 74,  470 => 121,  464 => 125,  461 => 70,  459 => 116,  442 => 151,  437 => 61,  428 => 116,  423 => 146,  414 => 144,  408 => 109,  405 => 108,  403 => 48,  400 => 47,  390 => 136,  388 => 42,  374 => 128,  355 => 122,  350 => 26,  344 => 24,  337 => 90,  316 => 16,  311 => 83,  293 => 113,  290 => 90,  288 => 79,  285 => 111,  281 => 110,  278 => 95,  271 => 108,  266 => 366,  263 => 4,  255 => 353,  253 => 78,  250 => 44,  248 => 100,  225 => 87,  222 => 66,  220 => 65,  215 => 102,  210 => 59,  207 => 91,  126 => 55,  233 => 304,  212 => 60,  200 => 54,  184 => 48,  180 => 49,  174 => 67,  165 => 69,  153 => 55,  146 => 58,  140 => 51,  134 => 51,  129 => 59,  77 => 24,  81 => 31,  399 => 139,  396 => 138,  394 => 156,  387 => 135,  383 => 150,  377 => 37,  371 => 127,  366 => 150,  362 => 148,  359 => 144,  357 => 139,  352 => 121,  345 => 118,  342 => 116,  335 => 133,  329 => 130,  325 => 125,  321 => 100,  308 => 13,  294 => 111,  289 => 112,  283 => 97,  276 => 393,  270 => 84,  267 => 5,  260 => 104,  249 => 89,  245 => 83,  239 => 97,  237 => 71,  234 => 84,  218 => 97,  214 => 63,  202 => 77,  191 => 26,  188 => 48,  185 => 61,  177 => 43,  170 => 71,  155 => 73,  90 => 32,  194 => 66,  181 => 77,  175 => 74,  169 => 66,  161 => 75,  148 => 60,  137 => 52,  701 => 418,  692 => 412,  687 => 409,  685 => 405,  675 => 132,  670 => 400,  665 => 196,  661 => 396,  654 => 123,  650 => 192,  644 => 190,  640 => 119,  634 => 209,  624 => 224,  616 => 182,  606 => 362,  599 => 215,  592 => 354,  588 => 175,  586 => 349,  584 => 173,  578 => 200,  568 => 338,  561 => 161,  553 => 329,  549 => 187,  542 => 320,  537 => 159,  529 => 191,  525 => 157,  520 => 312,  515 => 305,  503 => 81,  497 => 156,  492 => 298,  485 => 124,  477 => 288,  467 => 166,  463 => 117,  456 => 68,  454 => 121,  450 => 114,  446 => 266,  440 => 263,  435 => 262,  433 => 148,  431 => 257,  426 => 58,  416 => 145,  410 => 113,  398 => 88,  385 => 159,  368 => 126,  363 => 32,  348 => 136,  336 => 189,  332 => 88,  327 => 126,  322 => 184,  313 => 84,  305 => 119,  299 => 116,  292 => 91,  284 => 76,  268 => 107,  258 => 72,  242 => 101,  232 => 78,  213 => 82,  197 => 74,  186 => 81,  152 => 62,  127 => 28,  104 => 18,  100 => 40,  84 => 29,  70 => 20,  23 => 2,  34 => 2,  167 => 56,  128 => 49,  124 => 25,  118 => 46,  110 => 22,  76 => 17,  61 => 12,  114 => 43,  65 => 27,  132 => 28,  97 => 47,  58 => 17,  273 => 85,  269 => 6,  254 => 102,  243 => 98,  240 => 72,  238 => 312,  235 => 63,  230 => 62,  227 => 109,  224 => 61,  221 => 38,  219 => 84,  217 => 56,  208 => 74,  204 => 78,  179 => 76,  159 => 66,  143 => 56,  135 => 51,  119 => 44,  102 => 17,  71 => 20,  67 => 19,  63 => 16,  59 => 23,  87 => 14,  94 => 34,  89 => 40,  85 => 29,  75 => 30,  68 => 19,  56 => 11,  93 => 32,  88 => 31,  78 => 26,  46 => 8,  27 => 13,  44 => 11,  25 => 35,  31 => 3,  201 => 56,  196 => 52,  183 => 78,  171 => 57,  166 => 80,  163 => 58,  158 => 62,  156 => 64,  151 => 61,  142 => 30,  138 => 57,  136 => 58,  121 => 24,  117 => 19,  105 => 18,  91 => 31,  62 => 27,  49 => 13,  21 => 11,  28 => 3,  38 => 12,  26 => 11,  24 => 3,  19 => 1,  79 => 37,  72 => 29,  69 => 28,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 99,  157 => 37,  145 => 60,  139 => 54,  131 => 55,  123 => 46,  120 => 20,  115 => 45,  111 => 44,  108 => 19,  101 => 49,  98 => 24,  96 => 18,  83 => 24,  74 => 21,  66 => 19,  55 => 17,  52 => 14,  50 => 10,  43 => 11,  41 => 5,  35 => 8,  32 => 12,  29 => 6,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  187 => 64,  182 => 69,  176 => 73,  173 => 72,  168 => 70,  164 => 55,  162 => 68,  154 => 63,  149 => 60,  147 => 52,  144 => 48,  141 => 55,  133 => 46,  130 => 48,  125 => 46,  122 => 45,  116 => 45,  112 => 105,  109 => 53,  106 => 64,  103 => 40,  99 => 17,  95 => 41,  92 => 38,  86 => 37,  82 => 28,  80 => 33,  73 => 16,  64 => 13,  60 => 15,  57 => 17,  54 => 12,  51 => 22,  48 => 15,  45 => 20,  42 => 7,  39 => 6,  36 => 5,  33 => 3,  30 => 3,);
    }
}
