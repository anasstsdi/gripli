<?php

/* SonataAdminBundle:Block:block_search_result.html.twig */
class __TwigTemplate_ee6d965a259fed1bf18d9bca3f144543678bff45bd3a2339cd9232512fdd4de8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"col-md-3\">
        <div>
            <h4>
                ";
        // line 18
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method")) {
            // line 19
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 21
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
            echo "
                ";
        }
        // line 23
        echo "
                ";
        // line 24
        if (((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")) && ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method") > 0))) {
            // line 25
            echo "                    <span class=\"label label-info\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method"), "html", null, true);
            echo "</span>
                ";
        }
        // line 27
        echo "            </h4>
        </div>

        <ul>
            ";
        // line 31
        if ((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager"))) {
            // line 32
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 33
                echo "                    ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method")) {
                    // line 34
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "method"), "html", null, true);
                    echo "</a></li>
                    ";
                } else {
                    // line 36
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "method"), "html", null, true);
                    echo "</i></li>
                    ";
                }
                // line 38
                echo "                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 39
                echo "                    ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method")) {
                    // line 40
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                    echo " ~ <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_new_entry", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a></i></li>
                    ";
                } else {
                    // line 42
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</i></li>
                    ";
                }
                // line 44
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            ";
        } else {
            // line 46
            echo "                ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method")) {
                // line 47
                echo "                    <li><i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                echo " ~ <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_new_entry", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a></i></li>
                ";
            } else {
                // line 49
                echo "                    <li><i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                echo "</i></li>
                ";
            }
            // line 51
            echo "            ";
        }
        // line 52
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 11,  620 => 223,  612 => 220,  601 => 216,  585 => 209,  580 => 207,  577 => 206,  574 => 205,  566 => 203,  563 => 202,  559 => 201,  545 => 198,  536 => 194,  532 => 192,  526 => 190,  523 => 189,  518 => 180,  514 => 167,  511 => 166,  474 => 122,  455 => 115,  447 => 113,  421 => 90,  415 => 127,  412 => 126,  406 => 111,  404 => 90,  401 => 89,  391 => 163,  369 => 148,  351 => 141,  347 => 140,  333 => 132,  318 => 86,  310 => 83,  302 => 79,  192 => 53,  330 => 103,  315 => 98,  312 => 97,  306 => 95,  303 => 94,  287 => 77,  280 => 87,  275 => 86,  264 => 74,  231 => 69,  178 => 48,  160 => 57,  150 => 61,  12 => 36,  956 => 271,  953 => 270,  946 => 302,  942 => 300,  933 => 296,  925 => 292,  917 => 291,  914 => 290,  912 => 289,  909 => 288,  901 => 285,  898 => 284,  890 => 281,  887 => 280,  879 => 277,  870 => 274,  868 => 273,  863 => 269,  853 => 261,  848 => 258,  840 => 253,  834 => 249,  832 => 248,  822 => 244,  820 => 243,  816 => 241,  810 => 238,  807 => 237,  805 => 236,  802 => 235,  799 => 234,  791 => 262,  788 => 233,  778 => 267,  773 => 264,  771 => 232,  768 => 231,  765 => 230,  760 => 222,  743 => 217,  738 => 214,  732 => 213,  720 => 211,  717 => 210,  713 => 209,  700 => 205,  688 => 202,  682 => 201,  679 => 200,  676 => 199,  673 => 198,  668 => 197,  663 => 195,  657 => 193,  641 => 189,  629 => 186,  626 => 184,  607 => 218,  603 => 179,  600 => 178,  597 => 177,  594 => 212,  551 => 199,  548 => 176,  546 => 175,  543 => 174,  531 => 225,  513 => 230,  482 => 136,  479 => 135,  471 => 129,  468 => 128,  460 => 123,  451 => 120,  434 => 118,  424 => 91,  418 => 112,  381 => 157,  379 => 154,  376 => 153,  373 => 102,  370 => 101,  356 => 126,  354 => 142,  343 => 92,  340 => 136,  326 => 129,  323 => 88,  320 => 87,  309 => 82,  301 => 80,  296 => 151,  274 => 53,  265 => 51,  261 => 73,  236 => 42,  228 => 41,  216 => 35,  766 => 246,  763 => 245,  761 => 244,  757 => 221,  754 => 241,  742 => 240,  736 => 238,  733 => 237,  730 => 236,  728 => 235,  723 => 233,  711 => 231,  708 => 230,  705 => 229,  677 => 221,  660 => 194,  655 => 218,  647 => 191,  632 => 187,  627 => 207,  610 => 181,  589 => 203,  581 => 201,  575 => 199,  572 => 204,  570 => 164,  567 => 196,  558 => 160,  554 => 224,  552 => 188,  544 => 185,  540 => 160,  534 => 162,  528 => 160,  522 => 156,  507 => 165,  504 => 164,  498 => 173,  495 => 172,  487 => 169,  469 => 167,  462 => 158,  453 => 157,  448 => 119,  439 => 150,  436 => 149,  427 => 147,  411 => 143,  402 => 107,  393 => 168,  384 => 106,  360 => 128,  349 => 120,  339 => 114,  334 => 112,  324 => 110,  317 => 107,  307 => 82,  304 => 81,  300 => 93,  298 => 101,  295 => 100,  291 => 80,  286 => 98,  272 => 91,  262 => 81,  256 => 79,  252 => 68,  206 => 57,  190 => 49,  113 => 42,  279 => 77,  259 => 87,  247 => 75,  244 => 43,  198 => 55,  195 => 54,  107 => 40,  53 => 24,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 269,  947 => 249,  939 => 243,  936 => 297,  934 => 241,  931 => 295,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 286,  900 => 228,  897 => 227,  894 => 226,  892 => 282,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  873 => 217,  865 => 272,  862 => 212,  860 => 268,  857 => 267,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 246,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 233,  793 => 182,  785 => 232,  783 => 177,  780 => 303,  772 => 249,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 220,  751 => 163,  749 => 218,  746 => 161,  739 => 239,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 208,  699 => 142,  697 => 224,  696 => 204,  695 => 139,  694 => 223,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  666 => 126,  662 => 125,  658 => 124,  649 => 122,  643 => 120,  638 => 211,  635 => 226,  619 => 183,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 204,  576 => 101,  564 => 162,  557 => 96,  555 => 200,  550 => 94,  547 => 186,  527 => 91,  524 => 90,  512 => 84,  509 => 228,  501 => 163,  496 => 79,  493 => 155,  490 => 154,  480 => 75,  478 => 74,  470 => 121,  464 => 125,  461 => 70,  459 => 116,  442 => 151,  437 => 61,  428 => 116,  423 => 146,  414 => 144,  408 => 109,  405 => 108,  403 => 48,  400 => 47,  390 => 136,  388 => 42,  374 => 128,  355 => 122,  350 => 26,  344 => 24,  337 => 90,  316 => 16,  311 => 83,  293 => 90,  290 => 90,  288 => 79,  285 => 78,  281 => 75,  278 => 95,  271 => 374,  266 => 366,  263 => 365,  255 => 353,  253 => 78,  250 => 44,  248 => 336,  225 => 67,  222 => 66,  220 => 65,  215 => 102,  210 => 59,  207 => 58,  126 => 179,  233 => 304,  212 => 60,  200 => 31,  184 => 48,  180 => 49,  174 => 154,  165 => 77,  153 => 55,  146 => 181,  140 => 51,  134 => 55,  129 => 180,  77 => 31,  81 => 33,  399 => 139,  396 => 138,  394 => 156,  387 => 135,  383 => 150,  377 => 37,  371 => 127,  366 => 150,  362 => 148,  359 => 144,  357 => 139,  352 => 121,  345 => 118,  342 => 116,  335 => 133,  329 => 130,  325 => 125,  321 => 100,  308 => 13,  294 => 111,  289 => 109,  283 => 97,  276 => 393,  270 => 84,  267 => 128,  260 => 363,  249 => 89,  245 => 83,  239 => 64,  237 => 71,  234 => 84,  218 => 77,  214 => 63,  202 => 55,  191 => 26,  188 => 25,  185 => 63,  177 => 65,  170 => 61,  155 => 73,  90 => 38,  194 => 52,  181 => 232,  175 => 74,  169 => 44,  161 => 75,  148 => 53,  137 => 29,  701 => 418,  692 => 412,  687 => 409,  685 => 405,  675 => 132,  670 => 400,  665 => 196,  661 => 396,  654 => 123,  650 => 192,  644 => 190,  640 => 119,  634 => 209,  624 => 224,  616 => 182,  606 => 362,  599 => 215,  592 => 354,  588 => 175,  586 => 349,  584 => 173,  578 => 200,  568 => 338,  561 => 161,  553 => 329,  549 => 187,  542 => 320,  537 => 159,  529 => 191,  525 => 157,  520 => 312,  515 => 305,  503 => 81,  497 => 156,  492 => 298,  485 => 124,  477 => 288,  467 => 166,  463 => 117,  456 => 68,  454 => 121,  450 => 114,  446 => 266,  440 => 263,  435 => 262,  433 => 148,  431 => 257,  426 => 58,  416 => 145,  410 => 113,  398 => 88,  385 => 159,  368 => 126,  363 => 32,  348 => 136,  336 => 189,  332 => 88,  327 => 102,  322 => 184,  313 => 84,  305 => 175,  299 => 8,  292 => 91,  284 => 76,  268 => 373,  258 => 72,  242 => 82,  232 => 78,  213 => 126,  197 => 30,  186 => 51,  152 => 62,  127 => 52,  104 => 40,  100 => 40,  84 => 34,  70 => 29,  23 => 12,  34 => 18,  167 => 60,  128 => 47,  124 => 47,  118 => 49,  110 => 42,  76 => 35,  61 => 27,  114 => 174,  65 => 29,  132 => 57,  97 => 39,  58 => 24,  273 => 85,  269 => 94,  254 => 46,  243 => 66,  240 => 72,  238 => 312,  235 => 63,  230 => 62,  227 => 109,  224 => 61,  221 => 38,  219 => 129,  217 => 64,  208 => 74,  204 => 57,  179 => 224,  159 => 196,  143 => 55,  135 => 51,  119 => 44,  102 => 43,  71 => 31,  67 => 31,  63 => 17,  59 => 27,  87 => 28,  94 => 40,  89 => 39,  85 => 32,  75 => 33,  68 => 27,  56 => 21,  93 => 39,  88 => 37,  78 => 34,  46 => 19,  27 => 14,  44 => 21,  25 => 13,  31 => 15,  201 => 56,  196 => 68,  183 => 50,  171 => 44,  166 => 80,  163 => 58,  158 => 74,  156 => 64,  151 => 52,  142 => 30,  138 => 49,  136 => 70,  121 => 50,  117 => 175,  105 => 44,  91 => 37,  62 => 24,  49 => 22,  21 => 11,  28 => 14,  38 => 18,  26 => 14,  24 => 14,  19 => 11,  79 => 34,  72 => 28,  69 => 32,  47 => 22,  40 => 20,  37 => 17,  22 => 11,  246 => 67,  157 => 56,  145 => 53,  139 => 51,  131 => 48,  123 => 52,  120 => 51,  115 => 47,  111 => 47,  108 => 45,  101 => 42,  98 => 41,  96 => 40,  83 => 37,  74 => 30,  66 => 27,  55 => 25,  52 => 20,  50 => 23,  43 => 18,  41 => 18,  35 => 17,  32 => 16,  29 => 15,  209 => 58,  203 => 32,  199 => 265,  193 => 92,  189 => 52,  187 => 64,  182 => 23,  176 => 309,  173 => 46,  168 => 69,  164 => 59,  162 => 68,  154 => 189,  149 => 35,  147 => 52,  144 => 51,  141 => 58,  133 => 49,  130 => 49,  125 => 46,  122 => 45,  116 => 44,  112 => 105,  109 => 46,  106 => 64,  103 => 43,  99 => 41,  95 => 41,  92 => 38,  86 => 36,  82 => 34,  80 => 25,  73 => 29,  64 => 19,  60 => 23,  57 => 15,  54 => 23,  51 => 22,  48 => 21,  45 => 21,  42 => 21,  39 => 17,  36 => 19,  33 => 16,  30 => 13,);
    }
}
