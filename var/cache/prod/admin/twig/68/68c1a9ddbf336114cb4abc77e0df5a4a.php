<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @PrestaShop/Admin/Login/required_actions.html.twig */
class __TwigTemplate_7aba3e70881ef95abd027618f290e3cd extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 25
        return "@PrestaShop/Admin/Layout/login_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Layout/login_layout.html.twig", "@PrestaShop/Admin/Login/required_actions.html.twig", 25);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "  <div class=\"alert alert-warning d-print-none\" role=\"alert\">
    <p>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("For security reasons, you cannot connect to the back office until you have:", [], "Admin.Login.Notification"), "html", null, true);
        yield "</p>
    <ul class=\"alert-text\">
      ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["requiredActions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["requiredAction"]) {
            // line 32
            yield "        <li>";
            yield $context["requiredAction"];
            yield "</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['requiredAction'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "    </ul>
  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Login/required_actions.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  79 => 34,  70 => 32,  66 => 31,  61 => 29,  58 => 28,  51 => 27,  40 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Login/required_actions.html.twig", "C:\\wamp64\\www\\prestashop9\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Login\\required_actions.html.twig");
    }
}
