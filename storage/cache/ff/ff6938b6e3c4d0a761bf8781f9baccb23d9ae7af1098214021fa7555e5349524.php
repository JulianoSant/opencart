<?php

/* marketing/marketing_list.twig */
class __TwigTemplate_82e074778931b8d1c1771f68afb63f22c218b83262cbfe727880be15372adc1d extends Twig_Template
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
      <div class=\"pull-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "\" onclick=\"\$('#filter-marketing').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-marketing').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
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
        // line 15
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 24
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    <div class=\"row\">
      <div id=\"filter-marketing\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 32
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 36
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 37
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-code\">";
        // line 40
        echo (isset($context["entry_code"]) ? $context["entry_code"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_code\" value=\"";
        // line 41
        echo (isset($context["filter_code"]) ? $context["filter_code"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_code"]) ? $context["entry_code"] : null);
        echo "\" id=\"input-code\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">";
        // line 44
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 46
        echo (isset($context["filter_date_added"]) ? $context["filter_date_added"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span>
              </div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 53
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 61
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 64
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-marketing\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">
                        ";
        // line 71
        if (((isset($context["sort"]) ? $context["sort"] : null) == "m.name")) {
            // line 72
            echo "                        <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                        ";
        } else {
            // line 74
            echo "                        <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>";
        }
        // line 75
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 77
        if (((isset($context["sort"]) ? $context["sort"] : null) == "m.code")) {
            // line 78
            echo "                        <a href=\"";
            echo (isset($context["sort_code"]) ? $context["sort_code"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_code"]) ? $context["column_code"] : null);
            echo "</a>
                        ";
        } else {
            // line 80
            echo "                        <a href=\"";
            echo (isset($context["sort_code"]) ? $context["sort_code"] : null);
            echo "\">";
            echo (isset($context["column_code"]) ? $context["column_code"] : null);
            echo "</a>
                        ";
        }
        // line 82
        echo "                      </td>
                      <td class=\"text-right\">";
        // line 83
        echo (isset($context["column_orders"]) ? $context["column_orders"] : null);
        echo "</td>
                      <td class=\"text-left\">
                        ";
        // line 85
        if (((isset($context["sort"]) ? $context["sort"] : null) == "m.date_added")) {
            // line 86
            echo "                        <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>
                        ";
        } else {
            // line 88
            echo "                        <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>
                        ";
        }
        // line 90
        echo "                      </td>
                      <td class=\"text-right\">";
        // line 91
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 95
        if ((isset($context["marketings"]) ? $context["marketings"] : null)) {
            // line 96
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["marketings"]) ? $context["marketings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["marketing"]) {
                // line 97
                echo "                    <tr>
                      <td class=\"text-center\">
                        ";
                // line 99
                if (twig_in_filter($this->getAttribute($context["marketing"], "marketing_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 100
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["marketing"], "marketing_id", array());
                    echo "\" checked=\"checked\" />
                        ";
                } else {
                    // line 102
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["marketing"], "marketing_id", array());
                    echo "\" />
                        ";
                }
                // line 104
                echo "                      </td>
                      <td class=\"text-left\">";
                // line 105
                echo $this->getAttribute($context["marketing"], "name", array());
                echo "</td>
                      <td class=\"text-left\">";
                // line 106
                echo $this->getAttribute($context["marketing"], "code", array());
                echo "</td>
                      <td class=\"text-right\">";
                // line 107
                echo $this->getAttribute($context["marketing"], "orders", array());
                echo "</td>
                      <td class=\"text-left\">";
                // line 108
                echo $this->getAttribute($context["marketing"], "date_added", array());
                echo "</td>
                      <td class=\"text-right\"><a href=\"";
                // line 109
                echo $this->getAttribute($context["marketing"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marketing'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                    ";
        } else {
            // line 113
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"6\">";
            // line 114
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 117
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 122
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 123
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
    url = 'index.php?route=marketing/marketing&user_token=";
        // line 132
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

    var filter_name = \$('input[name=\\'filter_name\\']').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_code = \$('input[name=\\'filter_code\\']').val();

    if (filter_code) {
        url += '&filter_code=' + encodeURIComponent(filter_code);
    }

    var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

    if (filter_date_added) {
        url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }

    location = url;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
    language: '";
        // line 157
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickTime: false
});
//--></script>
</div>
";
        // line 162
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "marketing/marketing_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 162,  371 => 157,  343 => 132,  331 => 123,  327 => 122,  320 => 117,  314 => 114,  311 => 113,  308 => 112,  297 => 109,  293 => 108,  289 => 107,  285 => 106,  281 => 105,  278 => 104,  272 => 102,  266 => 100,  264 => 99,  260 => 97,  255 => 96,  253 => 95,  246 => 91,  243 => 90,  235 => 88,  225 => 86,  223 => 85,  218 => 83,  215 => 82,  207 => 80,  197 => 78,  195 => 77,  191 => 75,  184 => 74,  174 => 72,  172 => 71,  162 => 64,  156 => 61,  145 => 53,  133 => 46,  128 => 44,  120 => 41,  116 => 40,  108 => 37,  104 => 36,  97 => 32,  91 => 28,  83 => 24,  80 => 23,  72 => 19,  70 => 18,  65 => 15,  54 => 13,  50 => 12,  45 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-marketing').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>*/
/*         <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-marketing').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">{% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="row">*/
/*       <div id="filter-marketing" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*               <input type="text" name="filter_name" value="{{ filter_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-code">{{ entry_code }}</label>*/
/*               <input type="text" name="filter_code" value="{{ filter_code }}" placeholder="{{ entry_code }}" id="input-code" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-date-added">{{ entry_date_added }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="filter_date_added" value="{{ filter_date_added }}" placeholder="{{ entry_date_added }}" data-date-format="YYYY-MM-DD" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group text-right">*/
/*               <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-9 col-md-pull-3 col-sm-12">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-marketing">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                       <td class="text-left">*/
/*                         {% if sort == 'm.name' %}*/
/*                         <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a>*/
/*                         {% else %}*/
/*                         <a href="{{ sort_name }}">{{ column_name }}</a>{% endif %}*/
/*                       </td>*/
/*                       <td class="text-left">*/
/*                         {% if sort == 'm.code' %}*/
/*                         <a href="{{ sort_code }}" class="{{ order|lower }}">{{ column_code }}</a>*/
/*                         {% else %}*/
/*                         <a href="{{ sort_code }}">{{ column_code }}</a>*/
/*                         {% endif %}*/
/*                       </td>*/
/*                       <td class="text-right">{{ column_orders }}</td>*/
/*                       <td class="text-left">*/
/*                         {% if sort == 'm.date_added' %}*/
/*                         <a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a>*/
/*                         {% else %}*/
/*                         <a href="{{ sort_date_added }}">{{ column_date_added }}</a>*/
/*                         {% endif %}*/
/*                       </td>*/
/*                       <td class="text-right">{{ column_action }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% if marketings %}*/
/*                     {% for marketing in marketings %}*/
/*                     <tr>*/
/*                       <td class="text-center">*/
/*                         {% if marketing.marketing_id in selected %}*/
/*                         <input type="checkbox" name="selected[]" value="{{ marketing.marketing_id }}" checked="checked" />*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="selected[]" value="{{ marketing.marketing_id }}" />*/
/*                         {% endif %}*/
/*                       </td>*/
/*                       <td class="text-left">{{ marketing.name }}</td>*/
/*                       <td class="text-left">{{ marketing.code }}</td>*/
/*                       <td class="text-right">{{ marketing.orders }}</td>*/
/*                       <td class="text-left">{{ marketing.date_added }}</td>*/
/*                       <td class="text-right"><a href="{{ marketing.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                     {% else %}*/
/*                     <tr>*/
/*                       <td class="text-center" colspan="6">{{ text_no_results }}</td>*/
/*                     </tr>*/
/*                     {% endif %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </form>*/
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*               <div class="col-sm-6 text-right">{{ results }}</div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/*     url = 'index.php?route=marketing/marketing&user_token={{ user_token }}';*/
/* */
/*     var filter_name = $('input[name=\'filter_name\']').val();*/
/* */
/*     if (filter_name) {*/
/*         url += '&filter_name=' + encodeURIComponent(filter_name);*/
/*     }*/
/* */
/*     var filter_code = $('input[name=\'filter_code\']').val();*/
/* */
/*     if (filter_code) {*/
/*         url += '&filter_code=' + encodeURIComponent(filter_code);*/
/*     }*/
/* */
/*     var filter_date_added = $('input[name=\'filter_date_added\']').val();*/
/* */
/*     if (filter_date_added) {*/
/*         url += '&filter_date_added=' + encodeURIComponent(filter_date_added);*/
/*     }*/
/* */
/*     location = url;*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/*     language: '{{ datepicker }}',*/
/*     pickTime: false*/
/* });*/
/* //--></script>*/
/* </div>*/
/* {{ footer }}*/
