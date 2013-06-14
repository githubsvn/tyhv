<?php

/* SMAdminBundle:Security:login.html.twig */
class __TwigTemplate_fae12b9d50ca541d45fac443a2b74f63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMAdminBundle::layout.login.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMAdminBundle::layout.login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<script>
     Ext.QuickTips.init();

var loginForm = { xtype: 'form',
    id: 'login-form',
    bodyStyle: 'padding:15px;background:transparent',
    border: false,
    url:'/login_check',
    items: [
\t\t{ xtype: 'box', autoEl: { tag: 'div',
\t\t    html: '<div class=\"app-msg\"><img src=\"img/magic-wand.png\" class=\"app-img\" />Log in to The Magic Forum</div>'
\t\t}
\t\t},
\t\t{ xtype: 'textfield', id: 'username', fieldLabel: 'Username',
\t\t    allowBlank: false, minLength: 3, maxLength: 32
\t\t},
\t\t{ xtype: 'textfield', id: 'password', fieldLabel: 'Password', inputType: 'password',
\t\t    allowBlank: false, minLength: 6, maxLength: 32,
\t\t    minLengthText: 'Password must be at least 6 characters long.'
\t\t}
\t],
    buttons: [{
        text: 'Login',
        handler: function() {
            Ext.getCmp('login-form').getForm().submit({waitMsg: 'Please wait...' });
        }
    }, {
        text: 'Cancel',
        handler: function() {
            win.hide();
        }
    }]
}

\t\tExt.onReady(function() {

\t\t    win = new Ext.Window({
\t\t        applyTo: 'login-win',
\t\t        layout: 'form',
\t\t        width: 340,
\t\t        autoHeight: true,
\t\t        closeAction: 'hide',
\t\t        errorReader: new Ext.data.JsonReader(),
\t\t        items: [loginForm]

\t\t    });

\t\twin.show();
});

</script>
<div id=\"login-win\">
</div>
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
