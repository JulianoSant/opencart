<?php

/* marketplace/cron.twig */
class __TwigTemplate_c46804830c0711b8adcfc58978d9a66571020dc24a3ea52611daff017c512a1d extends Twig_Template
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
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-cron').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ol class=\"breadcrumb\">
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
        echo "      </ol>
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
        <h3 class=\"panel-title\"><i class=\"fa fa-question-circle\"></i> ";
        // line 29
        echo (isset($context["text_instruction"]) ? $context["text_instruction"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <p>";
        // line 32
        echo (isset($context["text_cron_1"]) ? $context["text_cron_1"] : null);
        echo "</p>
        <p>";
        // line 33
        echo (isset($context["text_cron_2"]) ? $context["text_cron_2"] : null);
        echo "</p>
        <div class=\"input-group\">
          <span class=\"input-group-addon\">";
        // line 35
        echo (isset($context["entry_cron"]) ? $context["entry_cron"] : null);
        echo "</span>
          <input type=\"text\" value=\"curl -s --connect-timeout 10 --max-time 1800 &quot;";
        // line 36
        echo (isset($context["cron"]) ? $context["cron"] : null);
        echo "&quot;\" id=\"input-cron\" class=\"form-control\" />
          <span class=\"input-group-btn\">
            <button type=\"button\" id=\"button-copy\" data-toggle=\"tooltip\" title=\"";
        // line 38
        echo (isset($context["button_copy"]) ? $context["button_copy"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-clipboard\"></i></button>
          </span>
        </div>
      </div>
    </div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 45
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 48
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-cron\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                  <td class=\"text-left\">";
        // line 54
        if (((isset($context["sort"]) ? $context["sort"] : null) == "code")) {
            echo "<a href=\"";
            echo (isset($context["sort_code"]) ? $context["sort_code"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_code"]) ? $context["column_code"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_code"]) ? $context["sort_code"] : null);
            echo "\">";
            echo (isset($context["column_code"]) ? $context["column_code"] : null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 55
        if (((isset($context["sort"]) ? $context["sort"] : null) == "cycle")) {
            echo "<a href=\"";
            echo (isset($context["sort_cycle"]) ? $context["sort_cycle"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_cycle"]) ? $context["column_cycle"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_cycle"]) ? $context["sort_cycle"] : null);
            echo "\">";
            echo (isset($context["column_cycle"]) ? $context["column_cycle"] : null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 56
        if (((isset($context["sort"]) ? $context["sort"] : null) == "action")) {
            echo "<a href=\"";
            echo (isset($context["sort_action"]) ? $context["sort_action"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_action"]) ? $context["column_action"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_action"]) ? $context["sort_action"] : null);
            echo "\">";
            echo (isset($context["column_action"]) ? $context["column_action"] : null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 57
        if (((isset($context["sort"]) ? $context["sort"] : null) == "status")) {
            echo "<a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 58
        if (((isset($context["sort"]) ? $context["sort"] : null) == "date_added")) {
            echo "<a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 59
        if (((isset($context["sort"]) ? $context["sort"] : null) == "date_modified")) {
            echo "<a href=\"";
            echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
            echo "\">";
            echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-right\">";
        // line 60
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 64
        if ((isset($context["crons"]) ? $context["crons"] : null)) {
            // line 65
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["crons"]) ? $context["crons"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cron"]) {
                // line 66
                echo "                <tr>
                  <td class=\"text-center\">
                    ";
                // line 68
                if (twig_in_filter($this->getAttribute($context["cron"], "cron_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 69
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["cron"], "cron_id", array());
                    echo "\" checked=\"checked\"/>
                    ";
                } else {
                    // line 71
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["cron"], "cron_id", array());
                    echo "\"/>
                    ";
                }
                // line 73
                echo "                  </td>
                  <td class=\"text-left\">";
                // line 74
                echo $this->getAttribute($context["cron"], "code", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 75
                echo $this->getAttribute($context["cron"], "cycle", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 76
                echo $this->getAttribute($context["cron"], "action", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 77
                echo $this->getAttribute($context["cron"], "status", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 78
                echo $this->getAttribute($context["cron"], "date_added", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 79
                echo $this->getAttribute($context["cron"], "date_modified", array());
                echo "</td>
                  <td class=\"text-right\">
                    <button type=\"button\" value=\"";
                // line 81
                echo $this->getAttribute($context["cron"], "cron_id", array());
                echo "\" data-toggle=\"tooltip\" data-title=\"";
                echo (isset($context["button_run"]) ? $context["button_run"] : null);
                echo "\" class=\"btn btn-warning\"><i class=\"fa fa-play\"></i></button>
                    ";
                // line 82
                if ( !$this->getAttribute($context["cron"], "enabled", array())) {
                    // line 83
                    echo "                    <button type=\"button\" value=\"";
                    echo $this->getAttribute($context["cron"], "cron_id", array());
                    echo "\" data-toggle=\"tooltip\" data-title=\"";
                    echo (isset($context["button_enable"]) ? $context["button_enable"] : null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></button>
                    ";
                } else {
                    // line 85
                    echo "                    <button type=\"button\" value=\"";
                    echo $this->getAttribute($context["cron"], "cron_id", array());
                    echo "\" data-toggle=\"tooltip\" data-title=\"";
                    echo (isset($context["button_disable"]) ? $context["button_disable"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                    ";
                }
                // line 87
                echo "                  </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cron'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                ";
        } else {
            // line 91
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"8\">";
            // line 92
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>
                ";
        }
        // line 95
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 100
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 101
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
  \$('#button-copy').on('click', function() {
    \$('#input-cron').select();

    document.execCommand('copy');
  });

  \$('#form-cron .btn-warning').on('click', function() {
    var element = this;

    \$.ajax({
      url: 'index.php?route=marketplace/cron/run&user_token=";
        // line 118
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&cron_id=' + \$(element).val(),
      dataType: 'json',
      beforeSend: function() {
        \$(element).button('loading');
      },
      complete: function() {
        \$(element).button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
          \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('#form-cron').on('click', '.btn-success', function() {
    var element = this;

    \$.ajax({
      url: 'index.php?route=marketplace/cron/enable&user_token=";
        // line 147
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&cron_id=' + \$(element).val(),
      dataType: 'json',
      beforeSend: function() {
        \$(element).button('loading');
      },
      complete: function() {
        \$(element).button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
          \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$(element).replaceWith('<button type=\"button\" value=\"' + \$(element).val() + '\" data-toggle=\"tooltip\" data-title=\"";
        // line 165
        echo (isset($context["button_disable"]) ? $context["button_disable"] : null);
        echo "\"  class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('#form-cron').on('click', '.btn-danger', function() {
    var element = this;

    \$.ajax({
      url: 'index.php?route=marketplace/cron/disable&user_token=";
        // line 178
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&cron_id=' + \$(element).val(),
      dataType: 'json',
      beforeSend: function() {
        \$(element).button('loading');
      },
      complete: function() {
        \$(element).button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
          \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$(element).replaceWith('<button type=\"button\" value=\"' + \$(element).val() + '\" data-toggle=\"tooltip\" data-title=\"";
        // line 196
        echo (isset($context["button_enable"]) ? $context["button_enable"] : null);
        echo "\"  class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></button>');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
//--></script>
";
        // line 205
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "marketplace/cron.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 205,  468 => 196,  447 => 178,  431 => 165,  410 => 147,  378 => 118,  358 => 101,  354 => 100,  347 => 95,  341 => 92,  338 => 91,  335 => 90,  327 => 87,  319 => 85,  311 => 83,  309 => 82,  303 => 81,  298 => 79,  294 => 78,  290 => 77,  286 => 76,  282 => 75,  278 => 74,  275 => 73,  269 => 71,  263 => 69,  261 => 68,  257 => 66,  252 => 65,  250 => 64,  243 => 60,  225 => 59,  207 => 58,  189 => 57,  171 => 56,  153 => 55,  135 => 54,  126 => 48,  120 => 45,  110 => 38,  105 => 36,  101 => 35,  96 => 33,  92 => 32,  86 => 29,  82 => 27,  74 => 23,  71 => 22,  63 => 18,  61 => 17,  55 => 13,  44 => 11,  40 => 10,  35 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-cron').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ol class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ol>*/
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
/*         <h3 class="panel-title"><i class="fa fa-question-circle"></i> {{ text_instruction }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <p>{{ text_cron_1 }}</p>*/
/*         <p>{{ text_cron_2 }}</p>*/
/*         <div class="input-group">*/
/*           <span class="input-group-addon">{{ entry_cron }}</span>*/
/*           <input type="text" value="curl -s --connect-timeout 10 --max-time 1800 &quot;{{ cron }}&quot;" id="input-cron" class="form-control" />*/
/*           <span class="input-group-btn">*/
/*             <button type="button" id="button-copy" data-toggle="tooltip" title="{{ button_copy }}" class="btn btn-default"><i class="fa fa-clipboard"></i></button>*/
/*           </span>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-cron">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').trigger('click');"/></td>*/
/*                   <td class="text-left">{% if sort == 'code' %}<a href="{{ sort_code }}" class="{{ order|lower }}">{{ column_code }}</a>{% else %}<a href="{{ sort_code }}">{{ column_code }}</a>{% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'cycle' %}<a href="{{ sort_cycle }}" class="{{ order|lower }}">{{ column_cycle }}</a>{% else %}<a href="{{ sort_cycle }}">{{ column_cycle }}</a>{% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'action' %}<a href="{{ sort_action }}" class="{{ order|lower }}">{{ column_action }}</a>{% else %}<a href="{{ sort_action }}">{{ column_action }}</a>{% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'status' %}<a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a>{% else %}<a href="{{ sort_status }}">{{ column_status }}</a>{% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'date_added' %}<a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a>{% else %}<a href="{{ sort_date_added }}">{{ column_date_added }}</a>{% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'date_modified' %}<a href="{{ sort_date_modified }}" class="{{ order|lower }}">{{ column_date_modified }}</a>{% else %}<a href="{{ sort_date_modified }}">{{ column_date_modified }}</a>{% endif %}</td>*/
/*                   <td class="text-right">{{ column_action }}</td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% if crons %}*/
/*                 {% for cron in crons %}*/
/*                 <tr>*/
/*                   <td class="text-center">*/
/*                     {% if cron.cron_id in selected %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ cron.cron_id }}" checked="checked"/>*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ cron.cron_id }}"/>*/
/*                     {% endif %}*/
/*                   </td>*/
/*                   <td class="text-left">{{ cron.code }}</td>*/
/*                   <td class="text-left">{{ cron.cycle }}</td>*/
/*                   <td class="text-left">{{ cron.action }}</td>*/
/*                   <td class="text-left">{{ cron.status }}</td>*/
/*                   <td class="text-left">{{ cron.date_added }}</td>*/
/*                   <td class="text-left">{{ cron.date_modified }}</td>*/
/*                   <td class="text-right">*/
/*                     <button type="button" value="{{ cron.cron_id }}" data-toggle="tooltip" data-title="{{ button_run }}" class="btn btn-warning"><i class="fa fa-play"></i></button>*/
/*                     {% if not cron.enabled %}*/
/*                     <button type="button" value="{{ cron.cron_id }}" data-toggle="tooltip" data-title="{{ button_enable }}" class="btn btn-success"><i class="fa fa-plus-circle"></i></button>*/
/*                     {% else %}*/
/*                     <button type="button" value="{{ cron.cron_id }}" data-toggle="tooltip" data-title="{{ button_disable }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button>*/
/*                     {% endif %}*/
/*                   </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="8">{{ text_no_results }}</td>*/
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
/* <script type="text/javascript"><!--*/
/*   $('#button-copy').on('click', function() {*/
/*     $('#input-cron').select();*/
/* */
/*     document.execCommand('copy');*/
/*   });*/
/* */
/*   $('#form-cron .btn-warning').on('click', function() {*/
/*     var element = this;*/
/* */
/*     $.ajax({*/
/*       url: 'index.php?route=marketplace/cron/run&user_token={{ user_token }}&cron_id=' + $(element).val(),*/
/*       dataType: 'json',*/
/*       beforeSend: function() {*/
/*         $(element).button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $(element).button('reset');*/
/*       },*/
/*       success: function(json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*           $('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $('#form-cron').on('click', '.btn-success', function() {*/
/*     var element = this;*/
/* */
/*     $.ajax({*/
/*       url: 'index.php?route=marketplace/cron/enable&user_token={{ user_token }}&cron_id=' + $(element).val(),*/
/*       dataType: 'json',*/
/*       beforeSend: function() {*/
/*         $(element).button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $(element).button('reset');*/
/*       },*/
/*       success: function(json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*           $('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/*           $(element).replaceWith('<button type="button" value="' + $(element).val() + '" data-toggle="tooltip" data-title="{{ button_disable }}"  class="btn btn-danger"><i class="fa fa-minus-circle"></i></button>');*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $('#form-cron').on('click', '.btn-danger', function() {*/
/*     var element = this;*/
/* */
/*     $.ajax({*/
/*       url: 'index.php?route=marketplace/cron/disable&user_token={{ user_token }}&cron_id=' + $(element).val(),*/
/*       dataType: 'json',*/
/*       beforeSend: function() {*/
/*         $(element).button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $(element).button('reset');*/
/*       },*/
/*       success: function(json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*           $('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/*           $(element).replaceWith('<button type="button" value="' + $(element).val() + '" data-toggle="tooltip" data-title="{{ button_enable }}"  class="btn btn-success"><i class="fa fa-plus-circle"></i></button>');*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* //--></script>*/
/* {{ footer }}*/
