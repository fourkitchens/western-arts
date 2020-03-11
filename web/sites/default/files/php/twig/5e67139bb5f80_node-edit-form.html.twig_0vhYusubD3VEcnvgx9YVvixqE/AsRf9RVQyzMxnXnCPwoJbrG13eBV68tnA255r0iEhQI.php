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

/* themes/contrib/thunder_admin/templates/content-edit/node-edit-form.html.twig */
class __TwigTemplate_81e63bc4918453c3e6dffb4680571be01698976b1755deddf7fae873adf53bf9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 18, "without" => 22];
        $functions = ["attach_library" => 18];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'without'],
                ['attach_library']
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
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("thunder_admin/form-advanced-sidebar-tray"), "html", null, true);
        echo "
";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("thunder_admin/content-form"), "html", null, true);
        echo "
<div class=\"content-form__layout\">
  <div class=\"content-form__layout-region content-form__main\">
    ";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null)), "advanced", "actions"), "html", null, true);
        echo "
  </div>

  <div class=\"content-form__layout-region content-form__advanced\">
    ";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "advanced", [])), "html", null, true);
        echo "
  </div>
</div>
<div class=\"content-form__actions\">
  ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "actions", [])), "html", null, true);
        echo "
</div>
<button class=\"content-form__advanced-toggle\" data-toggle-advanced-sidebar-tray>
  <svg width=\"27\" height=\"27\" viewBox=\"0 0 27 27\" xmlns=\"http://www.w3.org/2000/svg\"><title>Icons / Settings</title><path d=\"M3.278 14.665l-1.645-1.67a1.142 1.142 0 0 1-.072-1.484l1.04-1.285a1.159 1.159 0 0 1 1.474-.248l1.867 1.161a7.208 7.208 0 0 1 1.826-.947l.248-2.202c.062-.547.559-.99 1.108-.99h1.653c.55 0 1.052.444 1.12.99l.262 2.1c.71.212 1.375.53 1.978.938l1.726-1.103a1.142 1.142 0 0 1 1.466.238l1.04 1.285a1.159 1.159 0 0 1-.064 1.493l-1.433 1.49a7.55 7.55 0 0 1 .52 2.28l1.93.68c.518.184.838.768.715 1.303l-.372 1.61c-.124.537-.67.925-1.217.87l-2.007-.208a7.46 7.46 0 0 1-1.406 1.788l.698 1.965a1.142 1.142 0 0 1-.562 1.375l-1.486.725a1.159 1.159 0 0 1-1.44-.399l-1.163-1.782a7.201 7.201 0 0 1-2.115-.028l-1.17 1.84a1.142 1.142 0 0 1-1.43.404l-1.485-.724a1.159 1.159 0 0 1-.573-1.38l.735-2.15a7.464 7.464 0 0 1-1.237-1.62l-2.259.26a1.142 1.142 0 0 1-1.214-.857l-.372-1.611a1.159 1.159 0 0 1 .713-1.314l2.176-.797c.053-.696.2-1.366.427-1.996zm6.747 7.242c2.517 0 4.557-2.085 4.557-4.658 0-2.573-2.04-4.659-4.557-4.659-2.516 0-4.557 2.086-4.557 4.659s2.04 4.658 4.557 4.658zM18.64 3.833l-.468-.475a1.142 1.142 0 0 1-.078-1.49L17.987 2a1.16 1.16 0 0 1 1.482-.243l.502.313c.278-.2.585-.36.913-.474l.067-.597A1.142 1.142 0 0 1 22.061 0h-.171c.55 0 1.052.442 1.121.999l.069.546c.355.106.687.265.989.469l.435-.278a1.142 1.142 0 0 1 1.474.233l-.107-.132a1.16 1.16 0 0 1-.07 1.5l-.365.379c.142.355.232.739.26 1.14l.487.171c.523.185.848.765.723 1.306l.039-.167a1.16 1.16 0 0 1-1.226.869l-.499-.052a3.73 3.73 0 0 1-.703.894l.18.505c.186.523-.06 1.14-.56 1.384l.154-.075a1.16 1.16 0 0 1-1.446-.406l-.304-.466a3.6 3.6 0 0 1-1.057-.014l-.313.492a1.142 1.142 0 0 1-1.435.412l.153.074a1.16 1.16 0 0 1-.57-1.389l.203-.594a3.732 3.732 0 0 1-.619-.81l-.625.072a1.142 1.142 0 0 1-1.223-.856l.038.166a1.16 1.16 0 0 1 .721-1.318l.611-.223c.027-.349.1-.684.214-.998zm3.373 3.62c1.258 0 2.278-1.042 2.278-2.329 0-1.286-1.02-2.329-2.278-2.329-1.259 0-2.279 1.043-2.279 2.33 0 1.286 1.02 2.329 2.279 2.329z\" fill=\"#FFF\" fill-rule=\"evenodd\"/></svg>
</button>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/thunder_admin/templates/content-edit/node-edit-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 30,  72 => 26,  65 => 22,  59 => 19,  55 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/thunder_admin/templates/content-edit/node-edit-form.html.twig", "/app/web/themes/contrib/thunder_admin/templates/content-edit/node-edit-form.html.twig");
    }
}
