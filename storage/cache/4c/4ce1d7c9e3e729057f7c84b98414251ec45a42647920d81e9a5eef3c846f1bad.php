<?php

/* marketplace/installer_history.twig */
class __TwigTemplate_0ab87761336975594bf781c81ffebc3797347a5c3dab212fca3b93001e5610c7 extends Twig_Template
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
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <th>";
        // line 5
        echo (isset($context["column_filename"]) ? $context["column_filename"] : null);
        echo "</th>
        <th>";
        // line 6
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</th>
        <th class=\"text-right\">";
        // line 7
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 11
        if ((isset($context["histories"]) ? $context["histories"] : null)) {
            // line 12
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["histories"]) ? $context["histories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 13
                echo "      <tr>
        <td>";
                // line 14
                echo $this->getAttribute($context["history"], "filename", array());
                echo "</td>
        <td>";
                // line 15
                echo $this->getAttribute($context["history"], "date_added", array());
                echo "</td>
        <td class=\"text-right\"><button type=\"button\" value=\"";
                // line 16
                echo $this->getAttribute($context["history"], "extension_install_id", array());
                echo "\" data-loading=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_uninstall"]) ? $context["button_uninstall"] : null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></button></td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "      ";
        } else {
            // line 20
            echo "      <tr>
        <td colspan=\"3\" class=\"text-center\">";
            // line 21
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
      </tr>
      ";
        }
        // line 24
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 28
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 29
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "marketplace/installer_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  89 => 28,  83 => 24,  77 => 21,  74 => 20,  71 => 19,  58 => 16,  54 => 15,  50 => 14,  47 => 13,  42 => 12,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="table-responsive">*/
/*   <table class="table table-bordered">*/
/*     <thead>*/
/*       <tr>*/
/*         <th>{{ column_filename }}</th>*/
/*         <th>{{ column_date_added }}</th>*/
/*         <th class="text-right">{{ column_action }}</th>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% if histories %}*/
/*       {% for history in histories %}*/
/*       <tr>*/
/*         <td>{{ history.filename }}</td>*/
/*         <td>{{ history.date_added }}</td>*/
/*         <td class="text-right"><button type="button" value="{{ history.extension_install_id }}" data-loading="{{ text_loading }}" data-toggle="tooltip" title="{{ button_uninstall }}" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>*/
/*       </tr>*/
/*       {% endfor %}*/
/*       {% else %}*/
/*       <tr>*/
/*         <td colspan="3" class="text-center">{{ text_no_results }}</td>*/
/*       </tr>*/
/*       {% endif %}*/
/*     </tbody>*/
/*   </table>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*   <div class="col-sm-6 text-right">{{ results }}</div>*/
/* </div>*/
/* */
