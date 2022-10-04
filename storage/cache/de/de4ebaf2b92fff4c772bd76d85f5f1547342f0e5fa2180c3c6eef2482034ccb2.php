<?php

/* common/developer.twig */
class __TwigTemplate_86a5c3fe44e204f3076cbfd6183adad7c2c04f6e281302d71a7a5055ca059fa9 extends Twig_Template
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
        echo "<div class=\"modal-dialog\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\"><i class=\"fa fa-cog\"></i> ";
        // line 5
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h4>
    </div>
    <div class=\"modal-body\">
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td>";
        // line 11
        echo (isset($context["column_component"]) ? $context["column_component"] : null);
        echo "</td>
            <td style=\"width: 150px;\">";
        // line 12
        echo (isset($context["entry_cache"]) ? $context["entry_cache"] : null);
        echo "</td>
            <td class=\"text-right\" style=\"width: 1px;\">";
        // line 13
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
          </tr>
        </thead>
        <tr>
          <td>";
        // line 17
        echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
        echo "</td>
          <td >
            <div class=\"btn-group\" data-toggle=\"buttons\">
              ";
        // line 20
        if ((isset($context["developer_theme"]) ? $context["developer_theme"] : null)) {
            // line 21
            echo "              <label class=\"btn btn-success active\" ";
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
              <input type=\"radio\" name=\"developer_theme\" value=\"1\" ";
            // line 22
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo " checked/>
              ";
            // line 23
            echo (isset($context["button_on"]) ? $context["button_on"] : null);
            echo "
              </label>
              ";
        } else {
            // line 26
            echo "              <label class=\"btn btn-success\" ";
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
              <input type=\"radio\" name=\"developer_theme\" value=\"1\" ";
            // line 27
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo "/>
              ";
            // line 28
            echo (isset($context["button_on"]) ? $context["button_on"] : null);
            echo "
              </label>
              ";
        }
        // line 31
        echo "              ";
        if ( !(isset($context["developer_theme"]) ? $context["developer_theme"] : null)) {
            // line 32
            echo "              <label class=\"btn btn-danger active\" ";
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
              <input type=\"radio\" name=\"developer_theme\" value=\"0\" ";
            // line 33
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo " checked/>
              ";
            // line 34
            echo (isset($context["button_off"]) ? $context["button_off"] : null);
            echo "
              </label>
              ";
        } else {
            // line 37
            echo "              <label class=\"btn btn-danger\" ";
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
              <input type=\"radio\" name=\"developer_theme\" value=\"0\" ";
            // line 38
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo "/>
              ";
            // line 39
            echo (isset($context["button_off"]) ? $context["button_off"] : null);
            echo "
              </label>
              ";
        }
        // line 42
        echo "            </div>
          </td>
          <td class=\"text-right\"><button type=\"button\" value=\"theme\" data-toggle=\"tooltip\" title=\"";
        // line 44
        echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-refresh\"></i></button></td>
        </tr>
        <tr>
          <td>";
        // line 47
        echo (isset($context["entry_sass"]) ? $context["entry_sass"] : null);
        echo "</td>
          <td>
            <div class=\"btn-group\" data-toggle=\"buttons\">
              ";
        // line 50
        if ((isset($context["developer_sass"]) ? $context["developer_sass"] : null)) {
            // line 51
            echo "              <label class=\"btn btn-success active\">
                <input type=\"radio\" name=\"developer_sass\" value=\"1\" checked>
                ";
            // line 53
            echo (isset($context["button_on"]) ? $context["button_on"] : null);
            echo "
              </label>
              ";
        } else {
            // line 56
            echo "              <label class=\"btn btn-success\">
                <input type=\"radio\" name=\"developer_sass\" value=\"1\">
                ";
            // line 58
            echo (isset($context["button_on"]) ? $context["button_on"] : null);
            echo "
              </label>
              ";
        }
        // line 61
        echo "              ";
        if ( !(isset($context["developer_sass"]) ? $context["developer_sass"] : null)) {
            // line 62
            echo "              <label class=\"btn btn-danger active\">
                <input type=\"radio\" name=\"developer_sass\" value=\"0\" checked>
                ";
            // line 64
            echo (isset($context["button_off"]) ? $context["button_off"] : null);
            echo "
              </label>
              ";
        } else {
            // line 67
            echo "              <label class=\"btn btn-danger\">
                <input type=\"radio\" name=\"developer_sass\" value=\"0\">
                ";
            // line 69
            echo (isset($context["button_off"]) ? $context["button_off"] : null);
            echo "
              </label>
              ";
        }
        // line 72
        echo "            </div>
          </td>
          <td class=\"text-right\"><button type=\"button\" value=\"sass\" data-toggle=\"tooltip\" title=\"";
        // line 74
        echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-refresh\"></i></button></td>
        </tr>
      </table>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
  \$('input[name=\\'developer_theme\\'], input[name=\\'developer_sass\\']').on('change', function() {
    \$.ajax({
      url: 'index.php?route=common/developer/edit&user_token=";
        // line 83
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
      type: 'post',
      data: \$('input[name=\\'developer_theme\\']:checked, input[name=\\'developer_sass\\']:checked'),
      dataType: 'json',
      beforeSend: function() {
        \$('input[name=\\'developer_theme\\'], input[name=\\'developer_sass\\']').prop('disabled', true);
      },
      complete: function() {
        \$('input[name=\\'developer_theme\\'], input[name=\\'developer_sass\\']').prop('disabled', false);
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
          \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('#modal-developer table button').on('click', function() {
    var element = this;

    \$.ajax({
      url: 'index.php?route=common/developer/' + \$(element).attr('value') + '&user_token=";
        // line 114
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
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
          \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "common/developer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 114,  213 => 83,  201 => 74,  197 => 72,  191 => 69,  187 => 67,  181 => 64,  177 => 62,  174 => 61,  168 => 58,  164 => 56,  158 => 53,  154 => 51,  152 => 50,  146 => 47,  140 => 44,  136 => 42,  130 => 39,  124 => 38,  117 => 37,  111 => 34,  105 => 33,  98 => 32,  95 => 31,  89 => 28,  83 => 27,  76 => 26,  70 => 23,  64 => 22,  57 => 21,  55 => 20,  49 => 17,  42 => 13,  38 => 12,  34 => 11,  25 => 5,  19 => 1,);
    }
}
/* <div class="modal-dialog">*/
/*   <div class="modal-content">*/
/*     <div class="modal-header">*/
/*       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*       <h4 class="modal-title"><i class="fa fa-cog"></i> {{ heading_title }}</h4>*/
/*     </div>*/
/*     <div class="modal-body">*/
/*       <table class="table table-bordered">*/
/*         <thead>*/
/*           <tr>*/
/*             <td>{{ column_component }}</td>*/
/*             <td style="width: 150px;">{{ entry_cache }}</td>*/
/*             <td class="text-right" style="width: 1px;">{{ column_action }}</td>*/
/*           </tr>*/
/*         </thead>*/
/*         <tr>*/
/*           <td>{{ entry_theme }}</td>*/
/*           <td >*/
/*             <div class="btn-group" data-toggle="buttons">*/
/*               {% if developer_theme %}*/
/*               <label class="btn btn-success active" {% if not eval %}disabled="disabled"{% endif %}>*/
/*               <input type="radio" name="developer_theme" value="1" {% if not eval %}disabled="disabled"{% endif %} checked/>*/
/*               {{ button_on }}*/
/*               </label>*/
/*               {% else %}*/
/*               <label class="btn btn-success" {% if not eval %}disabled="disabled"{% endif %}>*/
/*               <input type="radio" name="developer_theme" value="1" {% if not eval %}disabled="disabled"{% endif %}/>*/
/*               {{ button_on }}*/
/*               </label>*/
/*               {% endif %}*/
/*               {% if not developer_theme %}*/
/*               <label class="btn btn-danger active" {% if not eval %}disabled="disabled"{% endif %}>*/
/*               <input type="radio" name="developer_theme" value="0" {% if not eval %}disabled="disabled"{% endif %} checked/>*/
/*               {{ button_off }}*/
/*               </label>*/
/*               {% else %}*/
/*               <label class="btn btn-danger" {% if not eval %}disabled="disabled"{% endif %}>*/
/*               <input type="radio" name="developer_theme" value="0" {% if not eval %}disabled="disabled"{% endif %}/>*/
/*               {{ button_off }}*/
/*               </label>*/
/*               {% endif %}*/
/*             </div>*/
/*           </td>*/
/*           <td class="text-right"><button type="button" value="theme" data-toggle="tooltip" title="{{ button_refresh }}" class="btn btn-warning"><i class="fa fa-refresh"></i></button></td>*/
/*         </tr>*/
/*         <tr>*/
/*           <td>{{ entry_sass }}</td>*/
/*           <td>*/
/*             <div class="btn-group" data-toggle="buttons">*/
/*               {% if developer_sass %}*/
/*               <label class="btn btn-success active">*/
/*                 <input type="radio" name="developer_sass" value="1" checked>*/
/*                 {{ button_on }}*/
/*               </label>*/
/*               {% else %}*/
/*               <label class="btn btn-success">*/
/*                 <input type="radio" name="developer_sass" value="1">*/
/*                 {{ button_on }}*/
/*               </label>*/
/*               {% endif %}*/
/*               {% if not developer_sass %}*/
/*               <label class="btn btn-danger active">*/
/*                 <input type="radio" name="developer_sass" value="0" checked>*/
/*                 {{ button_off }}*/
/*               </label>*/
/*               {% else %}*/
/*               <label class="btn btn-danger">*/
/*                 <input type="radio" name="developer_sass" value="0">*/
/*                 {{ button_off }}*/
/*               </label>*/
/*               {% endif %}*/
/*             </div>*/
/*           </td>*/
/*           <td class="text-right"><button type="button" value="sass" data-toggle="tooltip" title="{{ button_refresh }}" class="btn btn-warning"><i class="fa fa-refresh"></i></button></td>*/
/*         </tr>*/
/*       </table>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*   $('input[name=\'developer_theme\'], input[name=\'developer_sass\']').on('change', function() {*/
/*     $.ajax({*/
/*       url: 'index.php?route=common/developer/edit&user_token={{ user_token }}',*/
/*       type: 'post',*/
/*       data: $('input[name=\'developer_theme\']:checked, input[name=\'developer_sass\']:checked'),*/
/*       dataType: 'json',*/
/*       beforeSend: function() {*/
/*         $('input[name=\'developer_theme\'], input[name=\'developer_sass\']').prop('disabled', true);*/
/*       },*/
/*       complete: function() {*/
/*         $('input[name=\'developer_theme\'], input[name=\'developer_sass\']').prop('disabled', false);*/
/*       },*/
/*       success: function(json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*           $('#modal-developer .modal-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#modal-developer .modal-body').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $('#modal-developer table button').on('click', function() {*/
/*     var element = this;*/
/* */
/*     $.ajax({*/
/*       url: 'index.php?route=common/developer/' + $(element).attr('value') + '&user_token={{ user_token }}',*/
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
/*           $('#modal-developer .modal-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#modal-developer .modal-body').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/* });*/
/* //--></script>*/
