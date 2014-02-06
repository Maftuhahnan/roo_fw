<?php

/* base.twig */
class __TwigTemplate_969102ba808c9dfbd17cd2436f7cfa33b1e74563ded98cebda56af7adb6a5f0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'leftcolumn' => array($this, 'block_leftcolumn'),
            'rightcolum' => array($this, 'block_rightcolum'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/yourblog/css/style.css\"/>
</head>

<body>
    <div id=\"outerwrapper\">
        <div id=\"wrapper\">
        
            <div id=\"nav\">
                <ul>
                <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\">Contact</a></li>
                <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\">About me</a></li>
                <li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\">Advertise</a></li>
                </ul>
            </div>
            
            <div id=\"header\">
                <div id=\"logo\"><h1><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\">Your Blog</a></h1></div>
                <div id=\"search\">
                    <div id=\"inputs\"><input type=\"text\" id=\"inputsearch\" placeholder=\"Search...\" /></div>
                    <div id=\"submits\"><input type=\"button\" id=\"submitsearch\" /></div>
                    <div class=\"clear\"></div>
                </div>
            </div>
            
            <div class=\"clear\"></div>
            
            <div id=\"content\">
                <div id=\"leftcolumn\">
                    ";
        // line 35
        $this->displayBlock('leftcolumn', $context, $blocks);
        // line 36
        echo "                </div>

                <div id=\"rightcolumn\">
                    ";
        // line 39
        $this->displayBlock('rightcolum', $context, $blocks);
        // line 59
        echo "                </div>

                <div class=\"clear\"></div>
            </div>
            
            <div id=\"footer\">Template designed by <strong>Michael Clarke</strong></div>
        </div>
    </div>
</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Your Blog";
    }

    // line 35
    public function block_leftcolumn($context, array $blocks = array())
    {
    }

    // line 39
    public function block_rightcolum($context, array $blocks = array())
    {
        // line 40
        echo "                    <h3>Archives</h3>
                    <ul class=\"archives\">
                        <li><a href=\"#\">May</a></li>
                        <li><a href=\"#\">June</a></li>
                        <li><a href=\"#\">July</a></li>
                    </ul>
                    <h3>Categories</h3>
                    <ul class=\"categories\">
                        <li><a href=\"#\">Uncategorized</a></li>
                        <li><a href=\"#\">Internet</a></li>
                        <li><a href=\"#\">My Life </a></li>
                    </ul>
                    <h3>Blogroll</h3>
                    <ul>
                        <li><a href=\"#\">Uncategorized</a></li>
                        <li><a href=\"#\">Internet</a></li>
                        <li><a href=\"#\">My Life </a></li>
                    </ul>
                    ";
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
        return array (  115 => 40,  112 => 39,  107 => 35,  101 => 5,  88 => 59,  86 => 39,  81 => 36,  79 => 35,  64 => 23,  56 => 18,  52 => 17,  48 => 16,  44 => 15,  32 => 6,  28 => 5,  22 => 1,  54 => 13,  47 => 9,  43 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
