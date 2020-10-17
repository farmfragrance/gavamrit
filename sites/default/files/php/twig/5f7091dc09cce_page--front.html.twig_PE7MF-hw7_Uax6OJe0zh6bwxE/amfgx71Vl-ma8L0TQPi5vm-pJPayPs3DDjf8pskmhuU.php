<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/gavamrit/template/page--front.html.twig */
class __TwigTemplate_a9b247834462764b3ba1b1e5c2fe96c0d97acf0dd3934f7348b0ab7dcc5818b5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 5];
        $filters = ["escape" => 3];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!---top  header design -->
<header>
  ";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "  

  ";
        // line 5
        if ((($this->getAttribute(($context["page"] ?? null), "nav_branding", []) || $this->getAttribute(($context["page"] ?? null), "nav_main", [])) || $this->getAttribute(($context["page"] ?? null), "nav_additional", []))) {
            echo "  
  <nav class=\"navbar navbar-expand-lg navbar-dark text-light bg-dark\">
    <div class=\"container-fluid row mx-auto\">
      <div class=\"col-auto p-0\">
      ";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "nav_branding", [])), "html", null, true);
            echo "  
      </div>

      <div class=\"col-3 col-md-auto p-0 text-right\">
        <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\"
                data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
      </div>

      <div class=\"collapse navbar-collapse col-12 col-md-auto p-0 justify-content-end\" id=\"navbarSupportedContent\">
        ";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "nav_main", [])), "html", null, true);
            echo "      
        ";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "nav_additional", [])), "html", null, true);
            echo "      
      </div>
    </div>
  </nav>
  ";
        }
        // line 27
        echo "
</header>
   <!--slider -Start-->
 
<div id=\"layerslider\" style=\"width: 100%; height: 100%;\">
<div class=\"ls-slide\" data-ls=\"slidedelay: 2000; transition2d: all;\">
<img  src=\"/themes/gavamrit/sliderimages/slide-b-bg.jpg\"  class=\"ls-bg\"/></div>

<div class=\"ls-slide\" data-ls=\"slidedelay: 2000; transition2d: all;\">
<img  src=\"/themes/gavamrit/sliderimages/jellyfish-blur.jpg\" class=\"ls-bg\" /></div>
</div>



    <!--Slider End -->


<!-- Banner end -->
<!--  full Width -->
";
        // line 46
        if ($this->getAttribute(($context["page"] ?? null), "full_width", [])) {
            // line 47
            echo "  <section class=\"full_width\">
        ";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "full_width", [])), "html", null, true);
            echo "
  </section>
";
        }
        // line 51
        echo "
<!-- footer -->
<!-- footer -->
";
        // line 54
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 55
            echo "<footer> 
    
    <!--footer-middle-->
    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xs-4 col-sm-4\">

            <div class=\"\" style=\"float:left;width:100%; \">
              <h3>About Us</h3></div>
              <div>
                <p>Drupal.org lists nearly 1,200+ Contributed Drupal themes as of December, 2016. Currently themes display page is treated the same way as the modules display page with too much information such as development s</p>
              </div>
            <!-- <div class=\"social\">
              <ul>
                <li class=\"fb\"><a href=\"#\"></a></li>
                <li class=\"tw\"><a href=\"#\"></a></li>
                <li class=\"googleplus\"><a href=\"#\"></a></li>
                <li class=\"rss\"><a href=\"#\"></a></li>
                <li class=\"pintrest\"><a href=\"#\"></a></li>
                <li class=\"linkedin\"><a href=\"#\"></a></li>
                <li class=\"youtube\"><a href=\"#\"></a></li>
              </ul>
            </div> -->
          </div>
          <div class=\"col-sm-4 col-xs-4 \"><h3>Quick Links</h3> <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also called placeholder (or filler) text.</p> </div>

          <div class=\"col-xs-4 col-sm-4\">
            <h3>Contact Us</h3>
            <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also called placeholder (or filler) text.</p>
          </div>
        </div>
      </div>
    </div>
    <!--footer-bottom--> 
    <!-- BEGIN SIMPLE FOOTER --> 
    
  </footer>
";
        }
        // line 94
        echo "
<script>
jQuery(document).ready(function(){
jQuery(\"#layerslider\").layerSlider({
      pauseOnHover: false,
      showCircleTimer: false
    });
jQuery(\".form-search\").attr('placeholder','search...');


                    wow.init();

});
</script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->";
    }

    public function getTemplateName()
    {
        return "themes/gavamrit/template/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 94,  137 => 55,  135 => 54,  130 => 51,  124 => 48,  121 => 47,  119 => 46,  98 => 27,  90 => 22,  86 => 21,  71 => 9,  64 => 5,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavamrit/template/page--front.html.twig", "C:\\xampp\\htdocs\\fresh\\gavamrit\\themes\\gavamrit\\template\\page--front.html.twig");
    }
}
