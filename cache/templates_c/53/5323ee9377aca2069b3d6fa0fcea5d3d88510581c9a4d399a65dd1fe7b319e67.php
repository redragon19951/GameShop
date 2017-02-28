<?php

/* register.twig */
class __TwigTemplate_2f72637b5dcb60862bd11938630b686c41eeda3a92dc2f1760769759efdb3b49 extends Twig_Template
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
        $this->loadTemplate("/common/header.twig", "register.twig", 1)->display($context);
        // line 2
        echo "
<body>
  <form method=\"POST\" action=\"/yes\">

   Име:<input type=\"name\" name=\"name\"  /><br>
   Eмайл:<input type=\"text\" name=\"email\"  /><br>
   Username:<input type=\"username\" name=\"username\"  /><br>
   Парола:<input type=\"password\" name=\"password\" /><br>
   
   <input type=\"submit\" name=\"send\" /><br>
  </form>
  ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["Error"]) ? $context["Error"] : null), "html", null, true);
        echo "
</body>


";
        // line 17
        $this->loadTemplate("/common/footer.twig", "register.twig", 17)->display($context);
    }

    public function getTemplateName()
    {
        return "register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 17,  34 => 13,  21 => 2,  19 => 1,);
    }
}
/* {% include '/common/header.twig' %}*/
/* */
/* <body>*/
/*   <form method="POST" action="/yes">*/
/* */
/*    Име:<input type="name" name="name"  /><br>*/
/*    Eмайл:<input type="text" name="email"  /><br>*/
/*    Username:<input type="username" name="username"  /><br>*/
/*    Парола:<input type="password" name="password" /><br>*/
/*    */
/*    <input type="submit" name="send" /><br>*/
/*   </form>*/
/*   {{Error}}*/
/* </body>*/
/* */
/* */
/* {% include '/common/footer.twig' %}*/
