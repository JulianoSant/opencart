<?php

/* advanced/webhook_list.twig */
class __TwigTemplate_55598fec054f5c43f025c501de878d2df8b99fcc3838cdab3f0d8248f2867171 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-webhook').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 23
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 29
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-webhook\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">
                    ";
        // line 39
        if (((isset($context["sort"]) ? $context["sort"] : null) == "description")) {
            // line 40
            echo "                    <a href=\"";
            echo (isset($context["sort_description"]) ? $context["sort_description"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_description"]) ? $context["column_description"] : null);
            echo "</a>
                    ";
        } else {
            // line 42
            echo "                    <a href=\"";
            echo (isset($context["sort_description"]) ? $context["sort_description"] : null);
            echo "\">";
            echo (isset($context["column_description"]) ? $context["column_description"] : null);
            echo "</a>
                    ";
        }
        // line 44
        echo "                  </td>
                  <td class=\"text-left\">
                    ";
        // line 46
        if (((isset($context["sort"]) ? $context["sort"] : null) == "status")) {
            // line 47
            echo "                    <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
                    ";
        } else {
            // line 49
            echo "                    <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
                    ";
        }
        // line 51
        echo "                  </td>
                  <td class=\"text-left\">
                    ";
        // line 53
        if (((isset($context["sort"]) ? $context["sort"] : null) == "date_added")) {
            // line 54
            echo "                    <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>
                    ";
        } else {
            // line 56
            echo "                    <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>
                    ";
        }
        // line 58
        echo "                  </td>
                  <td class=\"text-left\">
                    ";
        // line 60
        if (((isset($context["sort"]) ? $context["sort"] : null) == "date_modified")) {
            // line 61
            echo "                    <a href=\"";
            echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
            echo "</a>
                    ";
        } else {
            // line 63
            echo "                    <a href=\"";
            echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
            echo "\">";
            echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
            echo "</a>
                    ";
        }
        // line 65
        echo "                  </td>
                  <td class=\"text-left\">
                    ";
        // line 67
        if (((isset($context["sort"]) ? $context["sort"] : null) == "actions_hook")) {
            // line 68
            echo "                    <a href=\"";
            echo (isset($context["sort_actions_hook"]) ? $context["sort_actions_hook"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_actions_hook"]) ? $context["column_actions_hook"] : null);
            echo "</a>
                    ";
        } else {
            // line 70
            echo "                    <a href=\"";
            echo (isset($context["sort_actions_hook"]) ? $context["sort_actions_hook"] : null);
            echo "\">";
            echo (isset($context["column_actions_hook"]) ? $context["column_actions_hook"] : null);
            echo "</a>
                    ";
        }
        // line 72
        echo "                  </td>
                  <td class=\"text-right\">";
        // line 73
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 77
        if ((isset($context["hooks"]) ? $context["hooks"] : null)) {
            // line 78
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hooks"]) ? $context["hooks"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["hook"]) {
                // line 79
                echo "                <tr>
                  <td class=\"text-center\">
                    ";
                // line 81
                if (twig_in_filter($this->getAttribute($context["hook"], "webhook_client_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 82
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["hook"], "webhook_client_id", array());
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 84
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["hook"], "webhook_client_id", array());
                    echo "\" />
                    ";
                }
                // line 86
                echo "                  </td>
                  <td class=\"text-left\">";
                // line 87
                echo $this->getAttribute($context["hook"], "description", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 88
                echo (($this->getAttribute($context["hook"], "status", array())) ? ((isset($context["text_enabled"]) ? $context["text_enabled"] : null)) : ((isset($context["text_disabled"]) ? $context["text_disabled"] : null)));
                echo "</td>
                  <td class=\"text-left\">";
                // line 89
                echo $this->getAttribute($context["hook"], "date_added", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 90
                echo $this->getAttribute($context["hook"], "date_modified", array());
                echo "</td>
                  <td class=\"text-left\">
                    ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["hook"], "actions_hook", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 93
                    echo "                    <span class=\"badge\">";
                    echo $context["action"];
                    echo "</span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "                  </td>
                  <td class=\"text-right\">
                    <div class=\"btn-group\">
                      <a href=\"";
                // line 98
                echo $this->getAttribute($context["hook"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                      <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                        <span class=\"caret\"></span>
                      </button>
                      <ul class=\"dropdown-menu\">
                        <li><a href=\"";
                // line 103
                echo $this->getAttribute($context["hook"], "toggleStatus", array());
                echo "\">";
                echo (($this->getAttribute($context["hook"], "status", array())) ? ((isset($context["button_disable"]) ? $context["button_disable"] : null)) : ((isset($context["button_enable"]) ? $context["button_enable"] : null)));
                echo "</a></li>
                        <li><a href=\"";
                // line 104
                echo $this->getAttribute($context["hook"], "logs", array());
                echo "\">";
                echo (isset($context["button_logs"]) ? $context["button_logs"] : null);
                echo "</a></li>
                      </ul>
                    </div>
                    <a href=\"";
                // line 107
                echo $this->getAttribute($context["hook"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                    <a href=\"";
                // line 108
                echo $this->getAttribute($context["hook"], "logs", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_logs"]) ? $context["button_logs"] : null);
                echo "\" class=\"btn btn-success\"><i class=\"fa fa-eye\"></i></a>
                    <a href=\"";
                // line 109
                echo $this->getAttribute($context["hook"], "toggleStatus", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (($this->getAttribute($context["hook"], "status", array())) ? ((isset($context["button_disable"]) ? $context["button_disable"] : null)) : ((isset($context["button_enable"]) ? $context["button_enable"] : null)));
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-ban\"></i></a>
                  </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hook'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                ";
        } else {
            // line 114
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"7\">";
            // line 115
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>
                ";
        }
        // line 118
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 123
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 124
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 130
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "advanced/webhook_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 130,  367 => 124,  363 => 123,  356 => 118,  350 => 115,  347 => 114,  344 => 113,  332 => 109,  326 => 108,  320 => 107,  312 => 104,  306 => 103,  296 => 98,  291 => 95,  282 => 93,  278 => 92,  273 => 90,  269 => 89,  265 => 88,  261 => 87,  258 => 86,  252 => 84,  246 => 82,  244 => 81,  240 => 79,  235 => 78,  233 => 77,  226 => 73,  223 => 72,  215 => 70,  205 => 68,  203 => 67,  199 => 65,  191 => 63,  181 => 61,  179 => 60,  175 => 58,  167 => 56,  157 => 54,  155 => 53,  151 => 51,  143 => 49,  133 => 47,  131 => 46,  127 => 44,  119 => 42,  109 => 40,  107 => 39,  97 => 32,  91 => 29,  87 => 27,  79 => 23,  76 => 22,  68 => 18,  66 => 17,  60 => 13,  49 => 11,  45 => 10,  40 => 8,  33 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-webhook').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-webhook">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                   <td class="text-left">*/
/*                     {% if sort == 'description' %}*/
/*                     <a href="{{ sort_description }}" class="{{ order|lower }}">{{ column_description }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_description }}">{{ column_description }}</a>*/
/*                     {% endif %}*/
/*                   </td>*/
/*                   <td class="text-left">*/
/*                     {% if sort == 'status' %}*/
/*                     <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_status }}">{{ column_status }}</a>*/
/*                     {% endif %}*/
/*                   </td>*/
/*                   <td class="text-left">*/
/*                     {% if sort == 'date_added' %}*/
/*                     <a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_date_added }}">{{ column_date_added }}</a>*/
/*                     {% endif %}*/
/*                   </td>*/
/*                   <td class="text-left">*/
/*                     {% if sort == 'date_modified' %}*/
/*                     <a href="{{ sort_date_modified }}" class="{{ order|lower }}">{{ column_date_modified }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_date_modified }}">{{ column_date_modified }}</a>*/
/*                     {% endif %}*/
/*                   </td>*/
/*                   <td class="text-left">*/
/*                     {% if sort == 'actions_hook' %}*/
/*                     <a href="{{ sort_actions_hook }}" class="{{ order|lower }}">{{ column_actions_hook }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_actions_hook }}">{{ column_actions_hook }}</a>*/
/*                     {% endif %}*/
/*                   </td>*/
/*                   <td class="text-right">{{ column_action }}</td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% if hooks %}*/
/*                 {% for hook in hooks %}*/
/*                 <tr>*/
/*                   <td class="text-center">*/
/*                     {% if hook.webhook_client_id in selected %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ hook.webhook_client_id }}" checked="checked" />*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ hook.webhook_client_id }}" />*/
/*                     {% endif %}*/
/*                   </td>*/
/*                   <td class="text-left">{{ hook.description }}</td>*/
/*                   <td class="text-left">{{ hook.status ? text_enabled : text_disabled }}</td>*/
/*                   <td class="text-left">{{ hook.date_added }}</td>*/
/*                   <td class="text-left">{{ hook.date_modified }}</td>*/
/*                   <td class="text-left">*/
/*                     {% for action in hook.actions_hook %}*/
/*                     <span class="badge">{{ action }}</span>*/
/*                     {% endfor %}*/
/*                   </td>*/
/*                   <td class="text-right">*/
/*                     <div class="btn-group">*/
/*                       <a href="{{ hook.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                       <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*/
/*                         <span class="caret"></span>*/
/*                       </button>*/
/*                       <ul class="dropdown-menu">*/
/*                         <li><a href="{{ hook.toggleStatus }}">{{ hook.status ? button_disable : button_enable }}</a></li>*/
/*                         <li><a href="{{ hook.logs }}">{{ button_logs }}</a></li>*/
/*                       </ul>*/
/*                     </div>*/
/*                     <a href="{{ hook.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                     <a href="{{ hook.logs }}" data-toggle="tooltip" title="{{ button_logs }}" class="btn btn-success"><i class="fa fa-eye"></i></a>*/
/*                     <a href="{{ hook.toggleStatus }}" data-toggle="tooltip" title="{{ hook.status ? button_disable : button_enable }}" class="btn btn-danger"><i class="fa fa-ban"></i></a>*/
/*                   </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="7">{{ text_no_results }}</td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div>*/
/*         </form>*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
