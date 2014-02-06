<?php

/* base.twig */
class __TwigTemplate_2824623ef725e6adb48dd71e4fe268292a91984844e8b7c7ce0de25f81fe13dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t<meta http-equiv=\"content-language\" content=\"en\" />
\t<meta name=\"robots\" content=\"noindex,nofollow\" />
\t<link rel=\"stylesheet\" media=\"screen,projection\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/adminiziolite/css/reset.css\" /> <!-- RESET -->
\t<link rel=\"stylesheet\" media=\"screen,projection\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/adminiziolite/css/main.css\" /> <!-- MAIN STYLE SHEET -->
\t<link rel=\"stylesheet\" media=\"screen,projection\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/adminiziolite/css/2col.css\" title=\"2col\" /> <!-- DEFAULT: 2 COLUMNS -->
\t<link rel=\"alternate stylesheet\" media=\"screen,projection\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/adminiziolite/css/1col.css\" title=\"1col\" /> <!-- ALTERNATE: 1 COLUMN -->
\t<!--[if lte IE 6]><link rel=\"stylesheet\" media=\"screen,projection\" type=\"text/css\" href=\"css/main-ie6.css\" /><![endif]--> <!-- MSIE6 -->
\t<link rel=\"stylesheet\" media=\"screen,projection\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/adminiziolite/css/style.css\" /> <!-- GRAPHIC THEME -->
\t<link rel=\"stylesheet\" media=\"screen,projection\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/adminiziolite/css/mystyle.css\" /> <!-- WRITE YOUR CSS CODE HERE -->
\t<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/adminiziolite/js/jquery.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/adminiziolite/js/switcher.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/adminiziolite/js/toggle.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/adminiziolite/js/ui.core.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/adminiziolite/js/ui.tabs.js\"></script>
\t<script type=\"text/javascript\">
\t\$(document).ready(function(){
\t\t\$(\".tabs > ul\").tabs();
\t});
\t</script>
\t<title>Admin Page</title>
</head>

<body>

<div id=\"main\">

\t<!-- Tray -->
\t<div id=\"tray\" class=\"box\">

\t\t<p class=\"f-left box\">

\t\t\t<!-- Switcher -->
\t\t\t<span class=\"f-left\" id=\"switcher\">
\t\t\t\t<a href=\"#\" rel=\"1col\" class=\"styleswitch ico-col1\" title=\"Display one column\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/adminiziolite/design/switcher-1col.gif\" alt=\"1 Column\" /></a>
\t\t\t\t<a href=\"#\" rel=\"2col\" class=\"styleswitch ico-col2\" title=\"Display two columns\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/adminiziolite/design/switcher-2col.gif\" alt=\"2 Columns\" /></a>
\t\t\t</span>

\t\t\tProject: <strong>Your Project</strong>

\t\t</p>

\t\t<p class=\"f-right\">User: <strong><a href=\"#\">Administrator</a></strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><a href=\"#\" id=\"logout\">Log out</a></strong></p>

\t</div> <!--  /tray -->

\t<hr class=\"noscreen\" />

\t<!-- Menu -->
\t<div id=\"menu\" class=\"box\">

\t\t<ul class=\"box f-right\">
\t\t\t<li><a href=\"#\"><span><strong>Visit Site &raquo;</strong></span></a></li>
\t\t</ul>

\t\t<ul class=\"box\">
\t\t\t<li id=\"menu-active\"><a href=\"#\"><span>Lorem ipsum</span></a></li> <!-- Active -->
\t\t\t<li><a href=\"#\"><span>Lorem ipsum</span></a></li>
\t\t\t<li><a href=\"#\"><span>Lorem ipsum</span></a></li>
\t\t\t<li><a href=\"#\"><span>Lorem ipsum</span></a></li>
\t\t\t<li><a href=\"#\"><span>Lorem ipsum</span></a></li>
\t\t\t<li><a href=\"#\"><span>Lorem ipsum</span></a></li>
\t\t\t<li><a href=\"#\"><span>Lorem ipsum</span></a></li>
\t\t</ul>

\t</div> <!-- /header -->

\t<hr class=\"noscreen\" />

\t<!-- Columns -->
\t<div id=\"cols\" class=\"box\">

\t\t<!-- Aside (Left Column) -->
\t\t<div id=\"aside\" class=\"box\">

\t\t\t<div class=\"padding box\">

\t\t\t\t<!-- Logo (Max. width = 200px) -->
\t\t\t\t<p id=\"logo\"><a href=\"#\"><img src=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/adminiziolite/tmp/logo.gif\" alt=\"Our logo\" title=\"Visit Site\" /></a></p>

\t\t\t\t<!-- Search -->
\t\t\t\t<form action=\"#\" method=\"get\" id=\"search\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<legend>Search</legend>

\t\t\t\t\t\t<p><input type=\"text\" size=\"17\" name=\"\" class=\"input-text\" />&nbsp;<input type=\"submit\" value=\"OK\" class=\"input-submit-02\" /><br />
\t\t\t\t\t\t<a href=\"javascript:toggle('search-options');\" class=\"ico-drop\">Advanced search</a></p>

\t\t\t\t\t\t<!-- Advanced search -->
\t\t\t\t\t\t<div id=\"search-options\" style=\"display:none;\">

\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"\" checked=\"checked\" /> Option I.</label><br />
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"\" /> Option II.</label><br />
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"\" /> Option III.</label>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t</div> <!-- /search-options -->

\t\t\t\t\t</fieldset>
\t\t\t\t</form>

\t\t\t\t<!-- Create a new project -->
\t\t\t\t<p id=\"btn-create\" class=\"box\"><a href=\"#\"><span>Create a new project</span></a></p>

\t\t\t</div> <!-- /padding -->

\t\t\t<ul class=\"box\">
\t\t\t\t<li><a href=\"#\">Lorem ipsum</a></li>
\t\t\t\t<li><a href=\"#\">Lorem ipsum</a></li>
\t\t\t\t<li><a href=\"#\">Lorem ipsum</a></li>
\t\t\t\t<li id=\"submenu-active\"><a href=\"#\">Active Page</a> <!-- Active -->
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"#\">Lorem ipsum</a></li>
\t\t\t\t<li><a href=\"#\">Lorem ipsum</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum</a></li>
\t\t\t\t\t</ul>
                </li>
\t\t\t\t<li><a href=\"#\">Lorem ipsum</a></li>
\t\t\t</ul>

\t\t</div> <!-- /aside -->

\t\t<hr class=\"noscreen\" />

\t\t<!-- Content (Right Column) -->
\t\t<div id=\"content\" class=\"box\">

\t\t\t";
        // line 142
        $this->displayBlock('content', $context, $blocks);
        // line 143
        echo "
\t\t</div> <!-- /content -->

\t</div> <!-- /cols -->

\t<hr class=\"noscreen\" />

\t<!-- Footer -->
\t<div id=\"footer\" class=\"box\">

\t\t<p class=\"f-left\">&copy; 2009 <a href=\"#\">Your Company</a>, All Rights Reserved &reg;</p>

\t\t<p class=\"f-right\">Templates by <a href=\"http://www.adminizio.com/\">Adminizio</a></p>

\t</div> <!-- /footer -->

</div> <!-- /main -->

</body>
</html>";
    }

    // line 142
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 142,  207 => 143,  205 => 142,  142 => 82,  96 => 39,  92 => 38,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  40 => 10,  36 => 9,  32 => 8,  20 => 1,  103 => 26,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  70 => 19,  63 => 18,  46 => 17,  31 => 4,  28 => 7,);
    }
}
