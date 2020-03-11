<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @atoms/images/icons/_icon.twig */
class __TwigTemplate_5f60a71a342eb233552ac94ca408cb395c61456d1f63e0b03e2f43440574359c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 13, "if" => 23];
        $filters = ["default" => 13, "escape" => 19];
        $functions = ["attach_library" => 19, "bem" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['default', 'escape'],
                ['attach_library', 'bem']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 13
        $context["icon_base_class"] = (((isset($context["icon_base_class"]) || array_key_exists("icon_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["icon_base_class"] ?? null)), "icon")) : ("icon"));
        // line 14
        $context["icon_url"] = ((($context["directory"] ?? null)) ? ((("/" . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))) . "/dist/")) : (""));
        // line 15
        echo "
";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("western_arts/sprite"), "html", null, true);
        echo "

<svg ";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["icon_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["icon_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["icon_blockname"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["icon_extra_class"] ?? null))), "html", null, true);
        echo "

  ";
        // line 23
        if (($context["icon_decorative"] ?? null)) {
            // line 24
            echo "    aria-hidden=\"true\" role=\"img\"
  ";
        } elseif (        // line 25
($context["icon_role"] ?? null)) {
            // line 26
            echo "    role=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_role"] ?? null)), "html", null, true);
            echo "\"
  ";
        }
        // line 28
        echo "
  ";
        // line 29
        if (($context["icon_title"] ?? null)) {
            // line 30
            echo "    aria-labelledby=\"title-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_name"] ?? null)), "html", null, true);
            echo "\"
  ";
        }
        // line 32
        echo "
  ";
        // line 33
        if (($context["icon_desc"] ?? null)) {
            // line 34
            echo "    aria-describedby=\"desc-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_name"] ?? null)), "html", null, true);
            echo "\"
  ";
        }
        // line 36
        echo ">
  ";
        // line 37
        if (($context["icon_title"] ?? null)) {
            // line 38
            echo "    <title id=\"title-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_name"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_title"] ?? null)), "html", null, true);
            echo "</title>
  ";
        }
        // line 40
        echo "  ";
        if (($context["icon_desc"] ?? null)) {
            // line 41
            echo "    <desc id=\"desc-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_name"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_desc"] ?? null)), "html", null, true);
            echo "</desc>
  ";
        }
        // line 43
        echo "  <use xlink:href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_url"] ?? null)), "html", null, true);
        echo "icons.svg#";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_name"] ?? null)), "html", null, true);
        echo "\"></use>
</svg>
";
    }

    public function getTemplateName()
    {
        return "@atoms/images/icons/_icon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 43,  123 => 41,  120 => 40,  112 => 38,  110 => 37,  107 => 36,  101 => 34,  99 => 33,  96 => 32,  90 => 30,  88 => 29,  85 => 28,  79 => 26,  77 => 25,  74 => 24,  72 => 23,  67 => 21,  62 => 19,  59 => 15,  57 => 14,  55 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@atoms/images/icons/_icon.twig", "/app/web/themes/custom/western_arts/components/01-atoms/images/icons/_icon.twig");
    }
}
