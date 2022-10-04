<?php

/* marketing/affiliate_list.twig */
class __TwigTemplate_fb307c44ed176755c5b2656a994fe76a0b521d717e2d3bd14fadf4e134e5f590 extends Twig_Template
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
        echo "\" onclick=\"\$('#filter-customer').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
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
        echo "') ? \$('#form-customer').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
  <div class=\"container-fluid\">
    ";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 25
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 29
        echo "    <div class=\"row\">
      <div id=\"filter-customer\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 33
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 37
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 38
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "\" id=\"input-customer\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-tracking\">";
        // line 41
        echo (isset($context["entry_tracking"]) ? $context["entry_tracking"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_tracking\" value=\"";
        // line 42
        echo (isset($context["filter_tracking"]) ? $context["filter_tracking"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_tracking"]) ? $context["entry_tracking"] : null);
        echo "\" id=\"input-tracking\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-commission\">";
        // line 45
        echo (isset($context["entry_commission"]) ? $context["entry_commission"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_commission\" value=\"";
        // line 46
        echo (isset($context["filter_commission"]) ? $context["filter_commission"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_commission"]) ? $context["entry_commission"] : null);
        echo "\" id=\"input-commission\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 49
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 52
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "1")) {
            // line 53
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                ";
        } else {
            // line 55
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                ";
        }
        // line 57
        echo "                ";
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "0")) {
            // line 58
            echo "                <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 60
            echo "                <option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 62
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">";
        // line 65
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 67
        echo (isset($context["filter_date_added"]) ? $context["filter_date_added"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\"/>
                <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </div>
              </div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 74
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
        // line 82
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 85
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                      <td class=\"text-left\">
                        ";
        // line 92
        if (((isset($context["sort"]) ? $context["sort"] : null) == "name")) {
            // line 93
            echo "                        <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                        ";
        } else {
            // line 95
            echo "                        <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>";
        }
        // line 96
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 98
        if (((isset($context["sort"]) ? $context["sort"] : null) == "ca.tracking")) {
            // line 99
            echo "                        <a href=\"";
            echo (isset($context["sort_tracking"]) ? $context["sort_tracking"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_tracking"]) ? $context["column_tracking"] : null);
            echo "</a>
                        ";
        } else {
            // line 101
            echo "                        <a href=\"";
            echo (isset($context["sort_tracking"]) ? $context["sort_tracking"] : null);
            echo "\">";
            echo (isset($context["column_tracking"]) ? $context["column_tracking"] : null);
            echo "</a>
                        ";
        }
        // line 103
        echo "                      </td>
                      <td class=\"text-right\">
                        ";
        // line 105
        if (((isset($context["sort"]) ? $context["sort"] : null) == "ca.commission")) {
            // line 106
            echo "                        <a href=\"";
            echo (isset($context["sort_commission"]) ? $context["sort_commission"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_commission"]) ? $context["column_commission"] : null);
            echo "</a>
                        ";
        } else {
            // line 108
            echo "                        <a href=\"";
            echo (isset($context["sort_commission"]) ? $context["sort_commission"] : null);
            echo "\">";
            echo (isset($context["column_commission"]) ? $context["column_commission"] : null);
            echo "</a>
                        ";
        }
        // line 110
        echo "                      </td>
                      <td class=\"text-right\">";
        // line 111
        echo (isset($context["column_balance"]) ? $context["column_balance"] : null);
        echo "</td>
                      <td class=\"text-left\">
                        ";
        // line 113
        if (((isset($context["sort"]) ? $context["sort"] : null) == "ca.status")) {
            // line 114
            echo "                        <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
                        ";
        } else {
            // line 116
            echo "                        <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
                        ";
        }
        // line 118
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 120
        if (((isset($context["sort"]) ? $context["sort"] : null) == "ca.date_added")) {
            // line 121
            echo "                        <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>
                        ";
        } else {
            // line 123
            echo "                        <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>
                        ";
        }
        // line 125
        echo "                      </td>
                      <td class=\"text-right\">";
        // line 126
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 130
        if ((isset($context["affiliates"]) ? $context["affiliates"] : null)) {
            // line 131
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["affiliates"]) ? $context["affiliates"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["affiliate"]) {
                // line 132
                echo "                    <tr>
                      <td class=\"text-center\">
                        ";
                // line 134
                if (twig_in_filter($this->getAttribute($context["affiliate"], "customer_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 135
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["affiliate"], "customer_id", array());
                    echo "\" checked=\"checked\"/>
                        ";
                } else {
                    // line 137
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["affiliate"], "customer_id", array());
                    echo "\"/>
                        ";
                }
                // line 139
                echo "                      </td>
                      <td class=\"text-left\"><a href=\"";
                // line 140
                echo $this->getAttribute($context["affiliate"], "customer", array());
                echo "\">";
                echo $this->getAttribute($context["affiliate"], "name", array());
                echo "</a></td>
                      <td class=\"text-left\">";
                // line 141
                echo $this->getAttribute($context["affiliate"], "tracking", array());
                echo "</td>
                      <td class=\"text-right\">";
                // line 142
                echo $this->getAttribute($context["affiliate"], "commission", array());
                echo "</td>
                      <td class=\"text-right\">";
                // line 143
                echo $this->getAttribute($context["affiliate"], "balance", array());
                echo "</td>
                      <td class=\"text-left\">";
                // line 144
                echo $this->getAttribute($context["affiliate"], "status", array());
                echo "</td>
                      <td class=\"text-left\">";
                // line 145
                echo $this->getAttribute($context["affiliate"], "date_added", array());
                echo "</td>
                      <td class=\"text-right\"><a href=\"";
                // line 146
                echo $this->getAttribute($context["affiliate"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiliate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "                    ";
        } else {
            // line 150
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"8\">";
            // line 151
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 154
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 159
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 160
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
    url = 'index.php?route=marketing/affiliate&user_token=";
        // line 170
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';
    var filter_name = \$('input[name=\\'filter_name\\']').val();
    if (filter_name) {
        url += '&filter_customer=' + encodeURIComponent(filter_name);
    }
    var filter_tracking = \$('input[name=\\'filter_tracking\\']').val();
    if (filter_tracking) {
        url += '&filter_tracking=' + encodeURIComponent(filter_tracking);
    }
    var filter_commission = \$('input[name=\\'filter_commission\\']').val();
    if (filter_commission) {
        url += '&filter_commission=' + filter_commission;
    }
    var filter_status = \$('select[name=\\'filter_status\\']').val();
    if (filter_status !== '') {
        url += '&filter_status=' + filter_status;
    }
    var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
    if (filter_date_added) {
        url += '&filter_date_added=' + filter_date_added;
    }
    location = url;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 198
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('input[name=\\'filter_customer\\']').val(item['label']);
    }
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
    language: '";
        // line 217
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickTime: false
});
//--></script>
";
        // line 221
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "marketing/affiliate_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 221,  508 => 217,  486 => 198,  455 => 170,  442 => 160,  438 => 159,  431 => 154,  425 => 151,  422 => 150,  419 => 149,  408 => 146,  404 => 145,  400 => 144,  396 => 143,  392 => 142,  388 => 141,  382 => 140,  379 => 139,  373 => 137,  367 => 135,  365 => 134,  361 => 132,  356 => 131,  354 => 130,  347 => 126,  344 => 125,  336 => 123,  326 => 121,  324 => 120,  320 => 118,  312 => 116,  302 => 114,  300 => 113,  295 => 111,  292 => 110,  284 => 108,  274 => 106,  272 => 105,  268 => 103,  260 => 101,  250 => 99,  248 => 98,  244 => 96,  237 => 95,  227 => 93,  225 => 92,  215 => 85,  209 => 82,  198 => 74,  186 => 67,  181 => 65,  176 => 62,  170 => 60,  164 => 58,  161 => 57,  155 => 55,  149 => 53,  147 => 52,  141 => 49,  133 => 46,  129 => 45,  121 => 42,  117 => 41,  109 => 38,  105 => 37,  98 => 33,  92 => 29,  84 => 25,  81 => 24,  73 => 20,  71 => 19,  65 => 15,  54 => 13,  50 => 12,  45 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-customer').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>*/
/*         <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-customer').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
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
/*     <div class="row">*/
/*       <div id="filter-customer" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-name">{{ entry_customer }}</label>*/
/*               <input type="text" name="filter_name" value="{{ filter_name }}" placeholder="{{ entry_customer }}" id="input-customer" class="form-control"/>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-tracking">{{ entry_tracking }}</label>*/
/*               <input type="text" name="filter_tracking" value="{{ filter_tracking }}" placeholder="{{ entry_tracking }}" id="input-tracking" class="form-control"/>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-commission">{{ entry_commission }}</label>*/
/*               <input type="text" name="filter_commission" value="{{ filter_commission }}" placeholder="{{ entry_commission }}" id="input-commission" class="form-control"/>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-status">{{ entry_status }}</label>*/
/*               <select name="filter_status" id="input-status" class="form-control">*/
/*                 <option value=""></option>*/
/*                 {% if filter_status == '1' %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 {% endif %}*/
/*                 {% if filter_status == '0' %}*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-date-added">{{ entry_date_added }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="filter_date_added" value="{{ filter_date_added }}" placeholder="{{ entry_date_added }}" data-date-format="YYYY-MM-DD" id="input-date-added" class="form-control"/>*/
/*                 <div class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </div>*/
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
/*             <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-customer">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').trigger('click');"/></td>*/
/*                       <td class="text-left">*/
/*                         {% if sort == 'name' %}*/
/*                         <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a>*/
/*                         {% else %}*/
/*                         <a href="{{ sort_name }}">{{ column_name }}</a>{% endif %}*/
/*                       </td>*/
/*                       <td class="text-left">*/
/*                         {% if sort == 'ca.tracking' %}*/
/*                         <a href="{{ sort_tracking }}" class="{{ order|lower }}">{{ column_tracking }}</a>*/
/*                         {% else %}*/
/*                         <a href="{{ sort_tracking }}">{{ column_tracking }}</a>*/
/*                         {% endif %}*/
/*                       </td>*/
/*                       <td class="text-right">*/
/*                         {% if sort == 'ca.commission' %}*/
/*                         <a href="{{ sort_commission }}" class="{{ order|lower }}">{{ column_commission }}</a>*/
/*                         {% else %}*/
/*                         <a href="{{ sort_commission }}">{{ column_commission }}</a>*/
/*                         {% endif %}*/
/*                       </td>*/
/*                       <td class="text-right">{{ column_balance }}</td>*/
/*                       <td class="text-left">*/
/*                         {% if sort == 'ca.status' %}*/
/*                         <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a>*/
/*                         {% else %}*/
/*                         <a href="{{ sort_status }}">{{ column_status }}</a>*/
/*                         {% endif %}*/
/*                       </td>*/
/*                       <td class="text-left">*/
/*                         {% if sort == 'ca.date_added' %}*/
/*                         <a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a>*/
/*                         {% else %}*/
/*                         <a href="{{ sort_date_added }}">{{ column_date_added }}</a>*/
/*                         {% endif %}*/
/*                       </td>*/
/*                       <td class="text-right">{{ column_action }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% if affiliates %}*/
/*                     {% for affiliate in affiliates %}*/
/*                     <tr>*/
/*                       <td class="text-center">*/
/*                         {% if affiliate.customer_id in selected %}*/
/*                         <input type="checkbox" name="selected[]" value="{{ affiliate.customer_id }}" checked="checked"/>*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="selected[]" value="{{ affiliate.customer_id }}"/>*/
/*                         {% endif %}*/
/*                       </td>*/
/*                       <td class="text-left"><a href="{{ affiliate.customer }}">{{ affiliate.name }}</a></td>*/
/*                       <td class="text-left">{{ affiliate.tracking }}</td>*/
/*                       <td class="text-right">{{ affiliate.commission }}</td>*/
/*                       <td class="text-right">{{ affiliate.balance }}</td>*/
/*                       <td class="text-left">{{ affiliate.status }}</td>*/
/*                       <td class="text-left">{{ affiliate.date_added }}</td>*/
/*                       <td class="text-right"><a href="{{ affiliate.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                     {% else %}*/
/*                     <tr>*/
/*                       <td class="text-center" colspan="8">{{ text_no_results }}</td>*/
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
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/*     url = 'index.php?route=marketing/affiliate&user_token={{ user_token }}';*/
/*     var filter_name = $('input[name=\'filter_name\']').val();*/
/*     if (filter_name) {*/
/*         url += '&filter_customer=' + encodeURIComponent(filter_name);*/
/*     }*/
/*     var filter_tracking = $('input[name=\'filter_tracking\']').val();*/
/*     if (filter_tracking) {*/
/*         url += '&filter_tracking=' + encodeURIComponent(filter_tracking);*/
/*     }*/
/*     var filter_commission = $('input[name=\'filter_commission\']').val();*/
/*     if (filter_commission) {*/
/*         url += '&filter_commission=' + filter_commission;*/
/*     }*/
/*     var filter_status = $('select[name=\'filter_status\']').val();*/
/*     if (filter_status !== '') {*/
/*         url += '&filter_status=' + filter_status;*/
/*     }*/
/*     var filter_date_added = $('input[name=\'filter_date_added\']').val();*/
/*     if (filter_date_added) {*/
/*         url += '&filter_date_added=' + filter_date_added;*/
/*     }*/
/*     location = url;*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('input[name=\'filter_customer\']').autocomplete({*/
/*     'source': function(request, response) {*/
/*         $.ajax({*/
/*             url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/*             dataType: 'json',*/
/*             success: function(json) {*/
/*                 response($.map(json, function(item) {*/
/*                     return {*/
/*                         label: item['name'],*/
/*                         value: item['customer_id']*/
/*                     }*/
/*                 }));*/
/*             }*/
/*         });*/
/*     },*/
/*     'select': function(item) {*/
/*         $('input[name=\'filter_customer\']').val(item['label']);*/
/*     }*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/*     language: '{{ datepicker }}',*/
/*     pickTime: false*/
/* });*/
/* //--></script>*/
/* {{ footer }}*/
