<?php

/* marketplace/marketplace_comment.twig */
class __TwigTemplate_42d7aebb8d8a2cacdd3ffad05d22bc89f61d6398ff2641e3609dc08be09022a7 extends Twig_Template
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
        if ((isset($context["comments"]) ? $context["comments"] : null)) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 3
                echo "<div id=\"comment";
                echo $this->getAttribute($context["comment"], "extension_comment_id", array());
                echo "\" class=\"media\">
  <div class=\"media-left\"><img src=\"";
                // line 4
                echo $this->getAttribute($context["comment"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["comment"], "member", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["comment"], "member", array());
                echo "\" class=\"media-object\" /></div>
  <div class=\"media-body\">
    <p class=\"media-heading\">";
                // line 6
                echo $this->getAttribute($context["comment"], "member", array());
                echo " <span>";
                echo $this->getAttribute($context["comment"], "date_added", array());
                echo "</span></p>
    <p>";
                // line 7
                echo $this->getAttribute($context["comment"], "comment", array());
                echo "</p>
    <div class=\"reply\">
      <div>
        ";
                // line 10
                if ($this->getAttribute($context["comment"], "reply", array())) {
                    // line 11
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["comment"], "reply", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                        // line 12
                        echo "        <div class=\"media\">
          <div class=\"media-left\"><img src=\"";
                        // line 13
                        echo $this->getAttribute($context["reply"], "image", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["reply"], "member", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["reply"], "member", array());
                        echo "\" class=\"media-object\" /></div>
          <div class=\"media-body\">
            <p class=\"media-heading\">";
                        // line 15
                        echo $this->getAttribute($context["reply"], "member", array());
                        echo " <span>";
                        echo $this->getAttribute($context["reply"], "date_added", array());
                        echo "</span></p>
            <p>";
                        // line 16
                        echo $this->getAttribute($context["reply"], "comment", array());
                        echo "</p>
          </div>
        </div>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    echo "        ";
                    if ($this->getAttribute($context["comment"], "next", array())) {
                        // line 21
                        echo "        <div class=\"text-center\"><a href=\"";
                        echo $this->getAttribute($context["comment"], "next", array());
                        echo "\" class=\"btn btn-block\">";
                        echo (isset($context["text_see_more"]) ? $context["text_see_more"] : null);
                        echo "</a></div>
        ";
                    }
                    // line 23
                    echo "        ";
                }
                // line 24
                echo "        <a href=\"";
                echo $this->getAttribute($context["comment"], "refresh", array());
                echo "\" class=\"reply-refresh hide\">";
                echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
                echo "</a> </div>
    </div>
    <p class=\"text-right\">
      <button type=\"button\" class=\"btn btn-link btn-xs\">";
                // line 27
                echo (isset($context["button_reply"]) ? $context["button_reply"] : null);
                echo "</button>
    </p>
    <div class=\"reply-input-box\" style=\"display: none;\">
      <div class=\"media\">
        <div class=\"media-body\">
          <div class=\"form-group\">
            <label for=\"input-comment";
                // line 33
                echo $this->getAttribute($context["comment"], "extension_comment_id", array());
                echo "\">";
                echo (isset($context["text_comment_add"]) ? $context["text_comment_add"] : null);
                echo "</label>
            <textarea name=\"comment\" placeholder=\"Write your comment here...\" id=\"input-comment";
                // line 34
                echo $this->getAttribute($context["comment"], "extension_comment_id", array());
                echo "\" class=\"form-control\"></textarea>
          </div>
          <div class=\"text-right\"><a href=\"";
                // line 36
                echo $this->getAttribute($context["comment"], "add", array());
                echo "\" class=\"btn btn-primary btn-sm\">";
                echo (isset($context["button_comment"]) ? $context["button_comment"] : null);
                echo "</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "<br/>
<div class=\"text-center\">";
            // line 43
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "marketplace/marketplace_comment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 43,  144 => 42,  129 => 36,  124 => 34,  118 => 33,  109 => 27,  100 => 24,  97 => 23,  89 => 21,  86 => 20,  76 => 16,  70 => 15,  61 => 13,  58 => 12,  53 => 11,  51 => 10,  45 => 7,  39 => 6,  30 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if comments %}*/
/* {% for comment in comments %}*/
/* <div id="comment{{ comment.extension_comment_id }}" class="media">*/
/*   <div class="media-left"><img src="{{ comment.image }}" alt="{{ comment.member }}" title="{{ comment.member }}" class="media-object" /></div>*/
/*   <div class="media-body">*/
/*     <p class="media-heading">{{ comment.member }} <span>{{ comment.date_added }}</span></p>*/
/*     <p>{{ comment.comment }}</p>*/
/*     <div class="reply">*/
/*       <div>*/
/*         {% if comment.reply %}*/
/*         {% for reply in comment.reply %}*/
/*         <div class="media">*/
/*           <div class="media-left"><img src="{{ reply.image }}" alt="{{ reply.member }}" title="{{ reply.member }}" class="media-object" /></div>*/
/*           <div class="media-body">*/
/*             <p class="media-heading">{{ reply.member }} <span>{{ reply.date_added }}</span></p>*/
/*             <p>{{ reply.comment }}</p>*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*         {% if comment.next %}*/
/*         <div class="text-center"><a href="{{ comment.next }}" class="btn btn-block">{{ text_see_more }}</a></div>*/
/*         {% endif %}*/
/*         {% endif %}*/
/*         <a href="{{ comment.refresh }}" class="reply-refresh hide">{{ button_refresh }}</a> </div>*/
/*     </div>*/
/*     <p class="text-right">*/
/*       <button type="button" class="btn btn-link btn-xs">{{ button_reply }}</button>*/
/*     </p>*/
/*     <div class="reply-input-box" style="display: none;">*/
/*       <div class="media">*/
/*         <div class="media-body">*/
/*           <div class="form-group">*/
/*             <label for="input-comment{{ comment.extension_comment_id }}">{{ text_comment_add }}</label>*/
/*             <textarea name="comment" placeholder="Write your comment here..." id="input-comment{{ comment.extension_comment_id }}" class="form-control"></textarea>*/
/*           </div>*/
/*           <div class="text-right"><a href="{{ comment.add }}" class="btn btn-primary btn-sm">{{ button_comment }}</a></div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endfor %}<br/>*/
/* <div class="text-center">{{ pagination }}</div>*/
/* {% endif %}*/
