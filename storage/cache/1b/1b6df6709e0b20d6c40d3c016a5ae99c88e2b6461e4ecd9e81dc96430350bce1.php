<?php

/* common/footer.twig */
class __TwigTemplate_00ea1d8b55cda2bf15e9cf2cf18ffd0857fa690b4b9336b09ce42251c3ec695d extends Twig_Template
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
        // line 1
        echo "<footer>
  <div class=\"container\"><a href=\"https://www.opencartbrasil.com.br\" target=\"_blank\">";
        // line 2
        echo (isset($context["text_project"]) ? $context["text_project"] : null);
        echo "</a>|<a href=\"http://docs.opencart.com/en-gb/introduction/\" target=\"_blank\">";
        echo (isset($context["text_documentation"]) ? $context["text_documentation"] : null);
        echo "</a>|<a href=\"https://forum.opencartbrasil.com.br\" target=\"_blank\">";
        echo (isset($context["text_support"]) ? $context["text_support"] : null);
        echo "</a><br /></div>
</footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <footer>*/
/*   <div class="container"><a href="https://www.opencartbrasil.com.br" target="_blank">{{ text_project }}</a>|<a href="http://docs.opencart.com/en-gb/introduction/" target="_blank">{{ text_documentation }}</a>|<a href="https://forum.opencartbrasil.com.br" target="_blank">{{ text_support }}</a><br /></div>*/
/* </footer>*/
/* </body>*/
/* </html>*/
