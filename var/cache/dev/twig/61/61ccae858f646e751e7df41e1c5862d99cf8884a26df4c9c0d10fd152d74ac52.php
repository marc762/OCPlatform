<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_bfcd7ebbc4ae234c8902f682fa5345e37c2491e5a004861821b2d696e7e70038 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67540f45c470b3cd791bf607cd85290b60b46172b00393edb349b81333ac8b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67540f45c470b3cd791bf607cd85290b60b46172b00393edb349b81333ac8b56->enter($__internal_67540f45c470b3cd791bf607cd85290b60b46172b00393edb349b81333ac8b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_a2ba9dbd717f1222689d0ac256d26799ab7f5e7ac5d1dc0d6e9be9aea1a38440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ba9dbd717f1222689d0ac256d26799ab7f5e7ac5d1dc0d6e9be9aea1a38440->enter($__internal_a2ba9dbd717f1222689d0ac256d26799ab7f5e7ac5d1dc0d6e9be9aea1a38440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_67540f45c470b3cd791bf607cd85290b60b46172b00393edb349b81333ac8b56->leave($__internal_67540f45c470b3cd791bf607cd85290b60b46172b00393edb349b81333ac8b56_prof);

        
        $__internal_a2ba9dbd717f1222689d0ac256d26799ab7f5e7ac5d1dc0d6e9be9aea1a38440->leave($__internal_a2ba9dbd717f1222689d0ac256d26799ab7f5e7ac5d1dc0d6e9be9aea1a38440_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/marc/site/cours-symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
