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

/* @organisms/site/site-header/site-header.twig */
class __TwigTemplate_c7dc28260f06976d3b0a8548dde875794f88e4c5737aca1c40f58a3a5805efb6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'header__branding' => [$this, 'block_header__branding'],
            'header__menu' => [$this, 'block_header__menu'],
            'header__breadcrumbs' => [$this, 'block_header__breadcrumbs'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "block" => 9, "embed" => 10, "include" => 27];
        $filters = ["escape" => 5, "default" => 12];
        $functions = ["bem" => 5];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'embed', 'include'],
                ['escape', 'default'],
                ['bem']
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
        // line 1
        $context["header__base_class"] = "header";
        // line 2
        echo "
";
        // line 3
        $context["header__logo_src"] = ((($context["directory"] ?? null)) ? ((("/" . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))) . "/images/logo.png")) : ("images/logo.png"));
        // line 4
        echo "
<header ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["header__base_class"] ?? null))), "html", null, true);
        echo ">
  <div ";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "inner", [], $this->sandbox->ensureToStringAllowed(($context["header__base_class"] ?? null))), "html", null, true);
        echo ">
    <div ";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "primary", [], $this->sandbox->ensureToStringAllowed(($context["header__base_class"] ?? null))), "html", null, true);
        echo ">
      <div ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "branding", [], $this->sandbox->ensureToStringAllowed(($context["header__base_class"] ?? null))), "html", null, true);
        echo ">
        ";
        // line 9
        $this->displayBlock('header__branding', $context, $blocks);
        // line 24
        echo "      </div>
      <div ";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "menu", [], $this->sandbox->ensureToStringAllowed(($context["header__base_class"] ?? null))), "html", null, true);
        echo ">
        ";
        // line 26
        $this->displayBlock('header__menu', $context, $blocks);
        // line 29
        echo "      </div>
    </div>
    <div ";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "secondary", [], $this->sandbox->ensureToStringAllowed(($context["header__base_class"] ?? null))), "html", null, true);
        echo ">
      ";
        // line 32
        $this->displayBlock('header__breadcrumbs', $context, $blocks);
        // line 35
        echo "    </div>
  </div>
</header>
";
    }

    // line 9
    public function block_header__branding($context, array $blocks = [])
    {
        // line 10
        echo "          ";
        $this->loadTemplate("@organisms/site/site-header/site-header.twig", "@organisms/site/site-header/site-header.twig", 10, "1484291214")->display(twig_array_merge($context, ["link_base_class" => "logo-link", "link_url" => ((        // line 12
(isset($context["logo_link__url"]) || array_key_exists("logo_link__url", $context))) ? (_twig_default_filter(($context["logo_link__url"] ?? null), "/")) : ("/"))]));
        // line 23
        echo "        ";
    }

    // line 26
    public function block_header__menu($context, array $blocks = [])
    {
        // line 27
        echo "          ";
        $this->loadTemplate("@molecules/menus/main-menu/main-menu.twig", "@organisms/site/site-header/site-header.twig", 27)->display($context);
        // line 28
        echo "        ";
    }

    // line 32
    public function block_header__breadcrumbs($context, array $blocks = [])
    {
        // line 33
        echo "        ";
        $this->loadTemplate("@molecules/menus/breadcrumbs/breadcrumbs.twig", "@organisms/site/site-header/site-header.twig", 33)->display($context);
        // line 34
        echo "      ";
    }

    public function getTemplateName()
    {
        return "@organisms/site/site-header/site-header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 34,  136 => 33,  133 => 32,  129 => 28,  126 => 27,  123 => 26,  119 => 23,  117 => 12,  115 => 10,  112 => 9,  105 => 35,  103 => 32,  99 => 31,  95 => 29,  93 => 26,  89 => 25,  86 => 24,  84 => 9,  80 => 8,  76 => 7,  72 => 6,  68 => 5,  65 => 4,  63 => 3,  60 => 2,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@organisms/site/site-header/site-header.twig", "/app/web/themes/custom/western_arts/components/03-organisms/site/site-header/site-header.twig");
    }
}


/* @organisms/site/site-header/site-header.twig */
class __TwigTemplate_c7dc28260f06976d3b0a8548dde875794f88e4c5737aca1c40f58a3a5805efb6___1484291214 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'link_content' => [$this, 'block_link_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 15];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
                []
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

    protected function doGetParent(array $context)
    {
        // line 10
        return "@atoms/links/link/link.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@atoms/links/link/link.twig", "@organisms/site/site-header/site-header.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_link_content($context, array $blocks = [])
    {
        // line 15
        echo "              ";
        $this->loadTemplate("@atoms/images/image/responsive-image.twig", "@organisms/site/site-header/site-header.twig", 15)->display(twig_array_merge($context, ["output_image_tag" => true, "image_src" =>         // line 17
($context["header__logo_src"] ?? null), "image_alt" => "Logo", "responsive_image_blockname" => "logo"]));
        // line 21
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@organisms/site/site-header/site-header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 21,  227 => 17,  225 => 15,  222 => 14,  212 => 10,  139 => 34,  136 => 33,  133 => 32,  129 => 28,  126 => 27,  123 => 26,  119 => 23,  117 => 12,  115 => 10,  112 => 9,  105 => 35,  103 => 32,  99 => 31,  95 => 29,  93 => 26,  89 => 25,  86 => 24,  84 => 9,  80 => 8,  76 => 7,  72 => 6,  68 => 5,  65 => 4,  63 => 3,  60 => 2,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@organisms/site/site-header/site-header.twig", "/app/web/themes/custom/western_arts/components/03-organisms/site/site-header/site-header.twig");
    }
}
