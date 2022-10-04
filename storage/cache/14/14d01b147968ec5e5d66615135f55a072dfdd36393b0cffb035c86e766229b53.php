<?php

/* zBeat/template/extension/module/featured.twig */
class __TwigTemplate_598143298abf6fe543a5de5350db846776d68f5420258e193c5109d47fbcd7fe extends Twig_Template
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
        echo "<div class=\"heading\"><h3>";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3></div>
<div class=\"product-content\">
\t<div class=\"row\">
\t ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "\t  <div class=\"product-layout col-lg-3 col-md-4 col-sm-6 col-xs-12\">
\t\t<div class=\"product-thumb transition\">
\t\t  <div class=\"image\"><a href=\"";
            // line 7
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive\" /></a></div>
\t\t  <div class=\"caption\">
\t\t\t<h4><a href=\"";
            // line 9
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
\t\t\t
\t\t\t";
            // line 11
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 12
                echo "\t\t\t<div class=\"rating\">
\t\t\t  ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 14
                    echo "\t\t\t  ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 15
                        echo "\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t  ";
                    } else {
                        // line 17
                        echo "\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t  ";
                    }
                    // line 19
                    echo "\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "\t\t\t</div>
\t\t\t";
            }
            // line 22
            echo "\t\t\t";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 23
                echo "\t\t\t<p class=\"price\">
\t\t\t  ";
                // line 24
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 25
                    echo "\t\t\t  ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
\t\t\t  ";
                } else {
                    // line 27
                    echo "\t\t\t  <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
\t\t\t  ";
                }
                // line 29
                echo "\t\t\t</p>
\t\t\t";
            }
            // line 31
            echo "\t\t  </div>
\t\t  <div class=\"button-group\">
\t\t\t<button type=\"button\" onclick=\"cart.add('";
            // line 33
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span></button>
\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 34
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 35
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
\t\t  </div>
\t\t</div>
\t  </div>
\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t</div>
\t
\t  ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 43
            echo "\t  <div class=\"product-layout-col\">
\t   <div class=\"product-thumb transition\">
\t\t<div class=\"col-sm-4\">
\t\t  <div class=\"image\"><a href=\"";
            // line 46
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive\" /></a></div>
\t\t</div>
\t\t<div class=\"col-sm-8\">
\t\t  <div class=\"caption\">
\t\t\t<h4><a href=\"";
            // line 50
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
\t\t\t";
            // line 51
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 52
                echo "\t\t\t<div class=\"rating\">
\t\t\t  ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 54
                    echo "\t\t\t  ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 55
                        echo "\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t  ";
                    } else {
                        // line 57
                        echo "\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t  ";
                    }
                    // line 59
                    echo "\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "\t\t\t</div>
\t\t\t";
            }
            // line 62
            echo "\t\t\t";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 63
                echo "\t\t\t<p class=\"price\">
\t\t\t  ";
                // line 64
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 65
                    echo "\t\t\t  ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
\t\t\t  ";
                } else {
                    // line 67
                    echo "\t\t\t  <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
\t\t\t  ";
                }
                // line 69
                echo "\t\t\t</p>
\t\t\t";
            }
            // line 71
            echo "\t\t  </div>
\t\t </div>
\t   </div>
\t  </div>
\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t
</div>";
    }

    public function getTemplateName()
    {
        return "zBeat/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 76,  225 => 71,  221 => 69,  213 => 67,  207 => 65,  205 => 64,  202 => 63,  199 => 62,  195 => 60,  189 => 59,  185 => 57,  181 => 55,  178 => 54,  174 => 53,  171 => 52,  169 => 51,  163 => 50,  150 => 46,  145 => 43,  141 => 42,  137 => 40,  124 => 35,  118 => 34,  112 => 33,  108 => 31,  104 => 29,  96 => 27,  90 => 25,  88 => 24,  85 => 23,  82 => 22,  78 => 20,  72 => 19,  68 => 17,  64 => 15,  61 => 14,  57 => 13,  54 => 12,  52 => 11,  45 => 9,  34 => 7,  30 => 5,  26 => 4,  19 => 1,);
    }
}
/* <div class="heading"><h3>{{ heading_title }}</h3></div>*/
/* <div class="product-content">*/
/* 	<div class="row">*/
/* 	 {% for product in products %}*/
/* 	  <div class="product-layout col-lg-3 col-md-4 col-sm-6 col-xs-12">*/
/* 		<div class="product-thumb transition">*/
/* 		  <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/* 		  <div class="caption">*/
/* 			<h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 			*/
/* 			{% if product.rating %}*/
/* 			<div class="rating">*/
/* 			  {% for i in 5 %}*/
/* 			  {% if product.rating < i %}*/
/* 			  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 			  {% else %}*/
/* 			  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 			  {% endif %}*/
/* 			  {% endfor %}*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if product.price %}*/
/* 			<p class="price">*/
/* 			  {% if not product.special %}*/
/* 			  {{ product.price }}*/
/* 			  {% else %}*/
/* 			  <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/* 			  {% endif %}*/
/* 			</p>*/
/* 			{% endif %}*/
/* 		  </div>*/
/* 		  <div class="button-group">*/
/* 			<button type="button" onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/* 			<button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/* 			<button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/* 		  </div>*/
/* 		</div>*/
/* 	  </div>*/
/* 	  {% endfor %}*/
/* 	</div>*/
/* 	*/
/* 	  {% for product in products %}*/
/* 	  <div class="product-layout-col">*/
/* 	   <div class="product-thumb transition">*/
/* 		<div class="col-sm-4">*/
/* 		  <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/* 		</div>*/
/* 		<div class="col-sm-8">*/
/* 		  <div class="caption">*/
/* 			<h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 			{% if product.rating %}*/
/* 			<div class="rating">*/
/* 			  {% for i in 5 %}*/
/* 			  {% if product.rating < i %}*/
/* 			  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 			  {% else %}*/
/* 			  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 			  {% endif %}*/
/* 			  {% endfor %}*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if product.price %}*/
/* 			<p class="price">*/
/* 			  {% if not product.special %}*/
/* 			  {{ product.price }}*/
/* 			  {% else %}*/
/* 			  <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/* 			  {% endif %}*/
/* 			</p>*/
/* 			{% endif %}*/
/* 		  </div>*/
/* 		 </div>*/
/* 	   </div>*/
/* 	  </div>*/
/* 	  {% endfor %}*/
/* 	*/
/* </div>*/
