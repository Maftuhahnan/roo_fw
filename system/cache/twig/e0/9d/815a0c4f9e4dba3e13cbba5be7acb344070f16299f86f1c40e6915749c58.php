<?php

/* index.twig */
class __TwigTemplate_e09d815a0c4f9e4dba3e13cbba5be7acb344070f16299f86f1c40e6915749c58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'leftcolumn' => array($this, 'block_leftcolumn'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Your Blog";
    }

    // line 5
    public function block_leftcolumn($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "    <div class=\"outh2\">
        <div class=\"date\">25 May</div>
        <div class=\"h2holder\"><h2>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
            echo "</h2></div>
    </div>
    <div class=\"article\">
        <div class=\"articlein\">
            <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content"), "html", null, true);
            echo " <a href=\"#\">Read More...</a></p>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  47 => 9,  43 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
