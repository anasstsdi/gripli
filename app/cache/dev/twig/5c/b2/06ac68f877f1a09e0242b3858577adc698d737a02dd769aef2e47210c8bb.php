<?php

/* SonataAdminBundle:CRUD:base_history.html.twig */
class __TwigTemplate_5cb206ac68f877f1a09e0242b3858577adc698d737a02dd769aef2e47210c8bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <li>";
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 17
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 18
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        echo "</li>
";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "
    <div class=\"col-md-5\">
        <table class=\"table\" id=\"revisions\">
            <thead>
                <tr>
                    <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_revision", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_timestamp", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 35
            echo "                    <tr>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev"), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "history_revision_timestamp"), "method"));
            $template->display($context);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "username"), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history_view_revision", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => array("revision" => $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev"))), "method"), "html", null, true);
            echo "\" class=\"revision-link\" rel=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_view_revision", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a></td>
                    </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </tbody>
        </table>
    </div>
    <div id=\"revision-detail\" class=\"col-md-7 revision-detail\">

    </div>

    <script>
        jQuery(document).ready(function() {

            jQuery('a.revision-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                jQuery('#revision-detail').html('');
                jQuery('table#revisions tbody tr').removeClass('current');
                jQuery(this).parent('').removeClass('current');

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  956 => 271,  953 => 270,  946 => 302,  942 => 300,  933 => 296,  925 => 292,  917 => 291,  914 => 290,  912 => 289,  909 => 288,  901 => 285,  898 => 284,  890 => 281,  887 => 280,  879 => 277,  870 => 274,  868 => 273,  863 => 269,  853 => 261,  848 => 258,  840 => 253,  834 => 249,  832 => 248,  822 => 244,  820 => 243,  816 => 241,  810 => 238,  807 => 237,  805 => 236,  802 => 235,  799 => 234,  791 => 262,  788 => 233,  778 => 267,  773 => 264,  771 => 232,  768 => 231,  765 => 230,  760 => 222,  743 => 217,  738 => 214,  732 => 213,  720 => 211,  717 => 210,  713 => 209,  700 => 205,  688 => 202,  682 => 201,  679 => 200,  676 => 199,  673 => 198,  668 => 197,  663 => 195,  657 => 193,  641 => 189,  629 => 186,  626 => 184,  607 => 180,  603 => 179,  600 => 178,  597 => 177,  594 => 176,  551 => 221,  548 => 176,  546 => 175,  543 => 174,  531 => 225,  513 => 230,  482 => 136,  479 => 135,  471 => 129,  468 => 128,  460 => 123,  451 => 120,  434 => 118,  424 => 114,  418 => 112,  381 => 105,  379 => 104,  376 => 103,  373 => 102,  370 => 101,  356 => 126,  354 => 101,  343 => 92,  340 => 91,  326 => 86,  323 => 85,  320 => 84,  309 => 82,  301 => 80,  296 => 151,  274 => 53,  265 => 51,  261 => 50,  236 => 42,  228 => 41,  216 => 35,  766 => 246,  763 => 245,  761 => 244,  757 => 221,  754 => 241,  742 => 240,  736 => 238,  733 => 237,  730 => 236,  728 => 235,  723 => 233,  711 => 231,  708 => 230,  705 => 229,  677 => 221,  660 => 194,  655 => 218,  647 => 191,  632 => 187,  627 => 207,  610 => 181,  589 => 203,  581 => 201,  575 => 199,  572 => 198,  570 => 164,  567 => 196,  558 => 160,  554 => 224,  552 => 188,  544 => 185,  540 => 160,  534 => 162,  528 => 160,  522 => 156,  507 => 156,  504 => 155,  498 => 173,  495 => 172,  487 => 169,  469 => 167,  462 => 158,  453 => 157,  448 => 119,  439 => 150,  436 => 149,  427 => 147,  411 => 143,  402 => 107,  393 => 137,  384 => 106,  360 => 128,  349 => 120,  339 => 114,  334 => 112,  324 => 110,  317 => 107,  307 => 104,  304 => 81,  300 => 102,  298 => 101,  295 => 100,  291 => 80,  286 => 98,  272 => 91,  262 => 88,  256 => 86,  252 => 85,  206 => 74,  190 => 66,  113 => 43,  279 => 77,  259 => 87,  247 => 84,  244 => 43,  198 => 94,  195 => 93,  107 => 38,  53 => 17,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 269,  947 => 249,  939 => 243,  936 => 297,  934 => 241,  931 => 295,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 286,  900 => 228,  897 => 227,  894 => 226,  892 => 282,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  873 => 217,  865 => 272,  862 => 212,  860 => 268,  857 => 267,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 246,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 233,  793 => 182,  785 => 232,  783 => 177,  780 => 303,  772 => 249,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 220,  751 => 163,  749 => 218,  746 => 161,  739 => 239,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 208,  699 => 142,  697 => 224,  696 => 204,  695 => 139,  694 => 223,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  666 => 126,  662 => 125,  658 => 124,  649 => 122,  643 => 120,  638 => 211,  635 => 188,  619 => 183,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 204,  576 => 101,  564 => 162,  557 => 96,  555 => 95,  550 => 94,  547 => 186,  527 => 91,  524 => 90,  512 => 84,  509 => 228,  501 => 154,  496 => 79,  493 => 143,  490 => 142,  480 => 75,  478 => 74,  470 => 73,  464 => 125,  461 => 70,  459 => 69,  442 => 151,  437 => 61,  428 => 116,  423 => 146,  414 => 144,  408 => 109,  405 => 108,  403 => 48,  400 => 47,  390 => 136,  388 => 42,  374 => 128,  355 => 122,  350 => 26,  344 => 24,  337 => 90,  316 => 16,  311 => 83,  293 => 90,  290 => 5,  288 => 79,  285 => 78,  281 => 96,  278 => 95,  271 => 374,  266 => 366,  263 => 365,  255 => 353,  253 => 122,  250 => 44,  248 => 336,  225 => 298,  222 => 297,  220 => 290,  215 => 102,  210 => 270,  207 => 33,  126 => 66,  233 => 304,  212 => 76,  200 => 31,  184 => 233,  180 => 66,  174 => 154,  165 => 77,  153 => 55,  146 => 181,  140 => 52,  134 => 161,  129 => 67,  77 => 40,  81 => 38,  399 => 139,  396 => 138,  394 => 156,  387 => 135,  383 => 150,  377 => 37,  371 => 127,  366 => 150,  362 => 148,  359 => 140,  357 => 139,  352 => 121,  345 => 118,  342 => 116,  335 => 21,  329 => 126,  325 => 125,  321 => 109,  308 => 13,  294 => 111,  289 => 109,  283 => 97,  276 => 393,  270 => 129,  267 => 128,  260 => 363,  249 => 89,  245 => 83,  239 => 117,  237 => 79,  234 => 84,  218 => 77,  214 => 75,  202 => 266,  191 => 26,  188 => 25,  185 => 63,  177 => 65,  170 => 61,  155 => 73,  90 => 34,  194 => 248,  181 => 232,  175 => 77,  169 => 78,  161 => 75,  148 => 53,  137 => 68,  701 => 418,  692 => 412,  687 => 409,  685 => 405,  675 => 132,  670 => 400,  665 => 196,  661 => 396,  654 => 123,  650 => 192,  644 => 190,  640 => 119,  634 => 209,  624 => 374,  616 => 182,  606 => 362,  599 => 358,  592 => 354,  588 => 175,  586 => 349,  584 => 173,  578 => 200,  568 => 338,  561 => 161,  553 => 329,  549 => 187,  542 => 320,  537 => 159,  529 => 159,  525 => 157,  520 => 312,  515 => 305,  503 => 81,  497 => 300,  492 => 298,  485 => 293,  477 => 288,  467 => 166,  463 => 280,  456 => 68,  454 => 121,  450 => 64,  446 => 266,  440 => 263,  435 => 262,  433 => 148,  431 => 257,  426 => 58,  416 => 145,  410 => 110,  398 => 236,  385 => 41,  368 => 126,  363 => 32,  348 => 136,  336 => 189,  332 => 88,  327 => 186,  322 => 184,  313 => 15,  305 => 175,  299 => 8,  292 => 170,  284 => 167,  268 => 373,  258 => 354,  242 => 82,  232 => 78,  213 => 126,  197 => 30,  186 => 239,  152 => 92,  127 => 48,  104 => 40,  100 => 62,  84 => 32,  70 => 27,  23 => 18,  34 => 18,  167 => 60,  128 => 37,  124 => 47,  118 => 34,  110 => 42,  76 => 30,  61 => 21,  114 => 111,  65 => 25,  132 => 42,  97 => 63,  58 => 21,  273 => 130,  269 => 94,  254 => 46,  243 => 327,  240 => 326,  238 => 312,  235 => 114,  230 => 303,  227 => 109,  224 => 39,  221 => 38,  219 => 129,  217 => 77,  208 => 74,  204 => 267,  179 => 224,  159 => 196,  143 => 55,  135 => 51,  119 => 45,  102 => 37,  71 => 30,  67 => 29,  63 => 28,  59 => 27,  87 => 57,  94 => 60,  89 => 44,  85 => 22,  75 => 32,  68 => 26,  56 => 40,  93 => 36,  88 => 67,  78 => 34,  46 => 35,  27 => 14,  44 => 16,  25 => 3,  31 => 16,  201 => 92,  196 => 68,  183 => 82,  171 => 153,  166 => 80,  163 => 62,  158 => 74,  156 => 54,  151 => 52,  142 => 50,  138 => 47,  136 => 70,  121 => 131,  117 => 54,  105 => 76,  91 => 45,  62 => 29,  49 => 21,  21 => 11,  28 => 13,  38 => 20,  26 => 14,  24 => 13,  19 => 11,  79 => 32,  72 => 31,  69 => 37,  47 => 14,  40 => 13,  37 => 20,  22 => 12,  246 => 90,  157 => 57,  145 => 30,  139 => 69,  131 => 160,  123 => 65,  120 => 60,  115 => 53,  111 => 39,  108 => 36,  101 => 89,  98 => 36,  96 => 37,  83 => 55,  74 => 20,  66 => 23,  55 => 18,  52 => 22,  50 => 25,  43 => 18,  41 => 11,  35 => 16,  32 => 15,  29 => 15,  209 => 75,  203 => 32,  199 => 265,  193 => 92,  189 => 240,  187 => 64,  182 => 23,  176 => 309,  173 => 62,  168 => 62,  164 => 59,  162 => 60,  154 => 189,  149 => 72,  147 => 90,  144 => 70,  141 => 72,  133 => 69,  130 => 49,  125 => 46,  122 => 46,  116 => 44,  112 => 42,  109 => 105,  106 => 64,  103 => 63,  99 => 38,  95 => 35,  92 => 59,  86 => 46,  82 => 33,  80 => 36,  73 => 29,  64 => 3,  60 => 25,  57 => 19,  54 => 19,  51 => 16,  48 => 24,  45 => 13,  42 => 15,  39 => 17,  36 => 18,  33 => 15,  30 => 15,);
    }
}
