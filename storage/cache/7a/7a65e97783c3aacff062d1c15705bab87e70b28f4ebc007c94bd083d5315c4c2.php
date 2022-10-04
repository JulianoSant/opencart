<?php

/* marketplace/marketplace_list.twig */
class __TwigTemplate_e5af1577c8c332ad0dba2dae037ffb0c09376a55d41cf20e8fb10a1e7ad17e2b extends Twig_Template
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
        ";
        // line 6
        if ( !(isset($context["error_signature"]) ? $context["error_signature"] : null)) {
            // line 7
            echo "        <button type=\"button\" id=\"button-opencart\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_opencart"]) ? $context["button_opencart"] : null);
            echo "\" class=\"btn btn-info\"><i class=\"fa fa-cog\"></i></button>
        ";
        } else {
            // line 9
            echo "        <button type=\"button\" id=\"button-opencart\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["error_signature"]) ? $context["error_signature"] : null);
            echo "\"  data-placement=\"left\" class=\"btn btn-danger\"><i class=\"fa fa-exclamation-triangle\"></i></button>
        ";
        }
        // line 11
        echo "      </div>
      <h1>";
        // line 12
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
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
        // line 17
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-puzzle-piece\"></i> ";
        // line 23
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"input-group\" id=\"extension-filter\">
            <input type=\"text\" name=\"filter_search\" value=\"";
        // line 28
        echo (isset($context["filter_search"]) ? $context["filter_search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control\" />
            <div class=\"input-group-btn\">";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 30
            echo "              ";
            if (($this->getAttribute($context["category"], "value", array()) == (isset($context["filter_category"]) ? $context["filter_category"] : null))) {
                // line 31
                echo "              <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">";
                echo (isset($context["text_category"]) ? $context["text_category"] : null);
                echo " (";
                echo $this->getAttribute($context["category"], "text", array());
                echo ") <span class=\"caret\"></span></button>
              ";
            }
            // line 33
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "              <ul class=\"dropdown-menu\">
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 36
            echo "                <li><a href=\"";
            echo $this->getAttribute($context["category"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["category"], "text", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "              </ul>
              <input type=\"hidden\" name=\"filter_category_id\" value=\"";
        // line 39
        echo (isset($context["filter_category_id"]) ? $context["filter_category_id"] : null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_download_id\" value=\"";
        // line 40
        echo (isset($context["filter_download_id"]) ? $context["filter_download_id"] : null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_rating\" value=\"";
        // line 41
        echo (isset($context["filter_rating"]) ? $context["filter_rating"] : null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_license\" value=\"";
        // line 42
        echo (isset($context["filter_license"]) ? $context["filter_license"] : null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_partner\" value=\"";
        // line 43
        echo (isset($context["filter_partner"]) ? $context["filter_partner"] : null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"sort\" value=\"";
        // line 44
        echo (isset($context["sort"]) ? $context["sort"] : null);
        echo "\" class=\"form-control\" />
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i></button>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-9 col-xs-7\">
            <div class=\"btn-group\">";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["licenses"]) ? $context["licenses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["license"]) {
            // line 52
            echo "              ";
            if (($this->getAttribute($context["license"], "value", array()) == (isset($context["filter_license"]) ? $context["filter_license"] : null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["license"], "href", array());
                echo "\" class=\"btn btn-default active\">";
                echo $this->getAttribute($context["license"], "text", array());
                echo "</a>";
            } else {
                echo "<a href=\"";
                echo $this->getAttribute($context["license"], "href", array());
                echo "\" class=\"btn btn-default\">";
                echo $this->getAttribute($context["license"], "text", array());
                echo "</a>";
            }
            // line 53
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['license'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </div>
          </div>
          <div class=\"col-sm-3 col-xs-5\">
            <div class=\"input-group pull-right\">
              <div class=\"input-group-addon\"><i class=\"fa fa-sort-amount-asc\"></i></div>
              <select onchange=\"location = this.value;\" class=\"form-control\">
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 61
            echo "                ";
            if (($this->getAttribute($context["sorts"], "value", array()) == (isset($context["sort"]) ? $context["sort"] : null))) {
                // line 62
                echo "                <option value=\"";
                echo $this->getAttribute($context["sorts"], "href", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["sorts"], "text", array());
                echo "</option>
                ";
            } else {
                // line 64
                echo "                <option value=\"";
                echo $this->getAttribute($context["sorts"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["sorts"], "text", array());
                echo "</option>
                ";
            }
            // line 66
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "              </select>
            </div>
          </div>
        </div>
        <br />
        <div id=\"extension-list\">";
        // line 72
        if ((isset($context["promotions"]) ? $context["promotions"] : null)) {
            // line 73
            echo "          <h3>Featured</h3>
          <div class=\"row\">
            ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) ? $context["promotions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 76
                echo "            ";
                if ($context["extension"]) {
                    // line 77
                    echo "            <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
              <section>
                <div class=\"extension-preview\"><a href=\"";
                    // line 79
                    echo $this->getAttribute($context["extension"], "href", array());
                    echo "\">
                  <div class=\"extension-description\"></div>
                  <img src=\"";
                    // line 81
                    echo $this->getAttribute($context["extension"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\" class=\"img-responsive\" /></a>
                </div>
                <div class=\"extension-name\">
                  <h4><a href=\"";
                    // line 84
                    echo $this->getAttribute($context["extension"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "</a></h4>
                  ";
                    // line 85
                    echo $this->getAttribute($context["extension"], "price", array());
                    echo "
                </div>
                <div class=\"extension-rate\">
                  <div class=\"row\">
                    <div class=\"col-xs-6\">";
                    // line 89
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 90
                        echo "                      ";
                        if (($this->getAttribute($context["extension"], "rating", array()) >= $context["i"])) {
                            echo "<i class=\"fa fa-star\"></i>";
                        } else {
                            echo "<i class=\"fa fa-star-o\"></i>";
                        }
                        // line 91
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
                    <div class=\"col-xs-6\">
                      <div class=\"text-right\">";
                    // line 93
                    echo $this->getAttribute($context["extension"], "rating_total", array());
                    echo " ";
                    echo (isset($context["text_reviews"]) ? $context["text_reviews"] : null);
                    echo "</div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            ";
                }
                // line 100
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "          </div>
          <hr />
          ";
        }
        // line 104
        echo "          ";
        if ((isset($context["extensions"]) ? $context["extensions"] : null)) {
            // line 105
            echo "          <div class=\"row\"> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 106
                echo "            ";
                if ($context["extension"]) {
                    // line 107
                    echo "            <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
              <section>
                <div class=\"extension-preview\"><a href=\"";
                    // line 109
                    echo $this->getAttribute($context["extension"], "href", array());
                    echo "\">
                  <div class=\"extension-description\"></div>
                  <img src=\"";
                    // line 111
                    echo $this->getAttribute($context["extension"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\" class=\"img-responsive\" /></a>
                </div>
                <div class=\"extension-name\">
                  <h4><a href=\"";
                    // line 114
                    echo $this->getAttribute($context["extension"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "</a></h4>
                  ";
                    // line 115
                    echo $this->getAttribute($context["extension"], "price", array());
                    echo "
                </div>
                <div class=\"extension-rate\">
                  <div class=\"row\">
                    <div class=\"col-xs-6\">";
                    // line 119
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 120
                        echo "                      ";
                        if (($this->getAttribute($context["extension"], "rating", array()) >= $context["i"])) {
                            echo "<i class=\"fa fa-star\"></i>";
                        } else {
                            echo "<i class=\"fa fa-star-o\"></i>";
                        }
                        // line 121
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 122
                    echo "                    </div>
                    <div class=\"col-xs-6\">
                      <div class=\"text-right\">";
                    // line 124
                    echo $this->getAttribute($context["extension"], "rating_total", array());
                    echo " ";
                    echo (isset($context["text_reviews"]) ? $context["text_reviews"] : null);
                    echo "</div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            ";
                }
                // line 131
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "          </div>
          ";
        } else {
            // line 134
            echo "          <p class=\"text-center\">";
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</p>
          ";
        }
        // line 136
        echo "        </div>
        <div class=\"row\">
          <div class=\"col-sm-12 text-center\">";
        // line 138
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
<script type=\"text/javascript\"><!--
\$('#button-opencart').on('click', function(e) {
    \$('#modal-opencart').remove();

    \$.ajax({
        url: 'index.php?route=marketplace/api&user_token=";
        // line 148
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
        dataType: 'html',
        beforeSend: function() {
            \$('#button-opencart').button('loading');
        },
        complete: function() {
            \$('#button-opencart').button('reset');
        },
        success: function(html) {
            \$('body').append('<div id=\"modal-opencart\" class=\"modal\">' + html + '</div>');
            
            \$('#modal-opencart').modal('show');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function(e) {
    var url = 'index.php?route=marketplace/marketplace&user_token=";
        // line 169
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

    var input = \$('#extension-filter :input');

    for (i = 0; i < input.length; i++) {
        if (\$(input[i]).val() != '' && \$(input[i]).val() != null) {
            url += '&' + \$(input[i]).attr('name') + '=' + \$(input[i]).val()
        }
    }

    location = url;
});

\$('input[name=\"filter_search\"]').keydown(function(e) {
    if (e.keyCode == 13) {
        e.preventDefault();

        \$('#button-filter').trigger('click');
    }
});
//--></script>
</div>
";
        // line 191
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "marketplace/marketplace_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 191,  449 => 169,  425 => 148,  412 => 138,  408 => 136,  402 => 134,  398 => 132,  392 => 131,  380 => 124,  376 => 122,  370 => 121,  363 => 120,  359 => 119,  352 => 115,  346 => 114,  336 => 111,  331 => 109,  327 => 107,  324 => 106,  319 => 105,  316 => 104,  311 => 101,  305 => 100,  293 => 93,  284 => 91,  277 => 90,  273 => 89,  266 => 85,  260 => 84,  250 => 81,  245 => 79,  241 => 77,  238 => 76,  234 => 75,  230 => 73,  228 => 72,  221 => 67,  215 => 66,  207 => 64,  199 => 62,  196 => 61,  192 => 60,  184 => 54,  178 => 53,  163 => 52,  159 => 51,  149 => 44,  145 => 43,  141 => 42,  137 => 41,  133 => 40,  129 => 39,  126 => 38,  115 => 36,  111 => 35,  108 => 34,  102 => 33,  94 => 31,  91 => 30,  87 => 29,  81 => 28,  73 => 23,  65 => 17,  54 => 15,  50 => 14,  45 => 12,  42 => 11,  36 => 9,  30 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         {% if not error_signature %}*/
/*         <button type="button" id="button-opencart" data-toggle="tooltip" title="{{ button_opencart }}" class="btn btn-info"><i class="fa fa-cog"></i></button>*/
/*         {% else %}*/
/*         <button type="button" id="button-opencart" data-toggle="tooltip" title="{{ error_signature }}"  data-placement="left" class="btn btn-danger"><i class="fa fa-exclamation-triangle"></i></button>*/
/*         {% endif %}*/
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
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-puzzle-piece"></i> {{ text_list }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <div class="well">*/
/*           <div class="input-group" id="extension-filter">*/
/*             <input type="text" name="filter_search" value="{{ filter_search }}" placeholder="{{ text_search }}" class="form-control" />*/
/*             <div class="input-group-btn">{% for category in categories %}*/
/*               {% if category.value == filter_category %}*/
/*               <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">{{ text_category }} ({{ category.text }}) <span class="caret"></span></button>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*               <ul class="dropdown-menu">*/
/*                 {% for category in categories %}*/
/*                 <li><a href="{{ category.href }}">{{ category.text }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               <input type="hidden" name="filter_category_id" value="{{ filter_category_id }}" class="form-control" />*/
/*               <input type="hidden" name="filter_download_id" value="{{ filter_download_id }}" class="form-control" />*/
/*               <input type="hidden" name="filter_rating" value="{{ filter_rating }}" class="form-control" />*/
/*               <input type="hidden" name="filter_license" value="{{ filter_license }}" class="form-control" />*/
/*               <input type="hidden" name="filter_partner" value="{{ filter_partner }}" class="form-control" />*/
/*               <input type="hidden" name="sort" value="{{ sort }}" class="form-control" />*/
/*               <button type="button" id="button-filter" class="btn btn-primary"><i class="fa fa-filter"></i></button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="row">*/
/*           <div class="col-sm-9 col-xs-7">*/
/*             <div class="btn-group">{% for license in licenses %}*/
/*               {% if license.value == filter_license %}<a href="{{ license.href }}" class="btn btn-default active">{{ license.text }}</a>{% else %}<a href="{{ license.href }}" class="btn btn-default">{{ license.text }}</a>{% endif %}*/
/*               {% endfor %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="col-sm-3 col-xs-5">*/
/*             <div class="input-group pull-right">*/
/*               <div class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></div>*/
/*               <select onchange="location = this.value;" class="form-control">*/
/*                 {% for sorts in sorts %}*/
/*                 {% if sorts.value == sort %}*/
/*                 <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <br />*/
/*         <div id="extension-list">{% if promotions %}*/
/*           <h3>Featured</h3>*/
/*           <div class="row">*/
/*             {% for extension in promotions %}*/
/*             {% if extension %}*/
/*             <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">*/
/*               <section>*/
/*                 <div class="extension-preview"><a href="{{ extension.href }}">*/
/*                   <div class="extension-description"></div>*/
/*                   <img src="{{ extension.image }}" alt="{{ extension.name }}" title="{{ extension.name }}" class="img-responsive" /></a>*/
/*                 </div>*/
/*                 <div class="extension-name">*/
/*                   <h4><a href="{{ extension.href }}">{{ extension.name }}</a></h4>*/
/*                   {{ extension.price }}*/
/*                 </div>*/
/*                 <div class="extension-rate">*/
/*                   <div class="row">*/
/*                     <div class="col-xs-6">{% for i in 1..5 %}*/
/*                       {% if extension.rating >= i %}<i class="fa fa-star"></i>{% else %}<i class="fa fa-star-o"></i>{% endif %}*/
/*                       {% endfor %}</div>*/
/*                     <div class="col-xs-6">*/
/*                       <div class="text-right">{{ extension.rating_total }} {{ text_reviews }}</div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </section>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*           </div>*/
/*           <hr />*/
/*           {% endif %}*/
/*           {% if extensions %}*/
/*           <div class="row"> {% for extension in extensions %}*/
/*             {% if extension %}*/
/*             <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">*/
/*               <section>*/
/*                 <div class="extension-preview"><a href="{{ extension.href }}">*/
/*                   <div class="extension-description"></div>*/
/*                   <img src="{{ extension.image }}" alt="{{ extension.name }}" title="{{ extension.name }}" class="img-responsive" /></a>*/
/*                 </div>*/
/*                 <div class="extension-name">*/
/*                   <h4><a href="{{ extension.href }}">{{ extension.name }}</a></h4>*/
/*                   {{ extension.price }}*/
/*                 </div>*/
/*                 <div class="extension-rate">*/
/*                   <div class="row">*/
/*                     <div class="col-xs-6">{% for i in 1..5 %}*/
/*                       {% if extension.rating >= i %}<i class="fa fa-star"></i>{% else %}<i class="fa fa-star-o"></i>{% endif %}*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                     <div class="col-xs-6">*/
/*                       <div class="text-right">{{ extension.rating_total }} {{ text_reviews }}</div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </section>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*           </div>*/
/*           {% else %}*/
/*           <p class="text-center">{{ text_no_results }}</p>*/
/*           {% endif %}*/
/*         </div>*/
/*         <div class="row">*/
/*           <div class="col-sm-12 text-center">{{ pagination }}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-opencart').on('click', function(e) {*/
/*     $('#modal-opencart').remove();*/
/* */
/*     $.ajax({*/
/*         url: 'index.php?route=marketplace/api&user_token={{ user_token }}',*/
/*         dataType: 'html',*/
/*         beforeSend: function() {*/
/*             $('#button-opencart').button('loading');*/
/*         },*/
/*         complete: function() {*/
/*             $('#button-opencart').button('reset');*/
/*         },*/
/*         success: function(html) {*/
/*             $('body').append('<div id="modal-opencart" class="modal">' + html + '</div>');*/
/*             */
/*             $('#modal-opencart').modal('show');*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function(e) {*/
/*     var url = 'index.php?route=marketplace/marketplace&user_token={{ user_token }}';*/
/* */
/*     var input = $('#extension-filter :input');*/
/* */
/*     for (i = 0; i < input.length; i++) {*/
/*         if ($(input[i]).val() != '' && $(input[i]).val() != null) {*/
/*             url += '&' + $(input[i]).attr('name') + '=' + $(input[i]).val()*/
/*         }*/
/*     }*/
/* */
/*     location = url;*/
/* });*/
/* */
/* $('input[name="filter_search"]').keydown(function(e) {*/
/*     if (e.keyCode == 13) {*/
/*         e.preventDefault();*/
/* */
/*         $('#button-filter').trigger('click');*/
/*     }*/
/* });*/
/* //--></script>*/
/* </div>*/
/* {{ footer }}*/
