<?php


include_once($_SERVER['DOCUMENT_ROOT'] . '/nad/view/Html2.php');

class Sidebar57V3
{
    public function showSidebar()
    {
        $HTMLsample = new baseHTMLsample();
        //return $HTMLsample->htmlSidebar();
        return $HTMLsample->htmlSidebarButton();
    }

    public function showNav($contentInfo)
    {
        $HTMLsample = new baseHTMLsample();

        return "
            <!--<div class=\"row\">-->
                <div class=\"bg-white my-2 px-2 py-2\">

        <!--<div class=\"videme-form-user-info\" id=\"nav_form_user_info\">
            <a class=\"videme-form-user-brand\" id=\"nav_user_brand\"></a>
            <a class=\"videme-form-user-hello\" id=\"nav_form_user_hello\">You:</a>
            <a class=\"videme-form-user-name\" id=\"nav_form_user_name\"></a>
            <a class=\"videme-form-user-email\" id=\"nav_form_user_email\"></a>
        </div>
        
        <div class='authorize-false'>
        <div class=\"alert alert-info\" role=\"alert\">
            <a href=\"https://api.vide.me/enter/\" class=\"alert-link\">Sign In</a></div>
        </div>-->
        
" . $HTMLsample->htmlYouSign($contentInfo) . "
                </div>
<!--
                <div class=\"bg-white my-2 px-4 py-4\">
-->

            <!--</div>-->
        ";
    }

    public function showBasis($mainHtml, $dom, $element, $sidebarReady, $navbarReady)
    {
        $html = new Html2();


        $bodyArt = $dom->getElementsByTagName('body')->item(0);
        $element->writeFragmentElement($dom, $bodyArt, $sidebarReady);

        $element->writeFragmentElement($dom, $bodyArt, $html->requiredHtml());

        /*$container = $element->writeSmartTag($dom,  $this->vars['body'],*/
        $body['container for spring header'] = $element->writeSmartTag($dom,  $bodyArt,
            [$element->class => 'videme-spring-container']);
        $body['rowProfileHeader'] = $element->writeSmartTag($dom,  $body['container for spring header'],
            [$element->class => 'videme-spring-row']);
        $body['container for 57'] = $element->writeSmartTag($dom,  $bodyArt,
            //[$element->class => 'container videme-container-for-48']);
            [$element->class => 'container-fluid pl-5 pr-5']);
        $body['row'] = $element->writeSmartTag($dom,  $body['container for 57'],
            [$element->class => 'row']);
        $body['col1'] = $element->writeSmartTag($dom,  $body['row'],
            //[$element->class => 'd-none d-md-block col-md-4 px-2 py-2']);
            //[$element->class => 'd-none d-md-block col-md-5 px-2 py-2']);
            //[$element->class => 'd-none d-md-block col-md-5 pl-0 pr-2 bg-secondary']);
            //[$element->class => 'col-sm12 col-md-6 col-lg-5 pl-0 pr-2 bg-secondary']);
            [$element->class => 'col-md-6 col-lg-5 pl-0 pr-2']);
        $body['col2'] = $element->writeSmartTag($dom,  $body['row'],
            //[$element->class => 'col-md-7 col-lg-7 px-2 py-2']);
            //[$element->class => 'col-md-7 col-lg-7 pl-2 pr-0 bg-info']);
            //[$element->class => 'col-sm-12 col-md-6 col-lg-7 pl-2 pr-0 bg-info']);
            [$element->class => 'col-sm-12 col-md-6 col-lg-7 pl-2 pr-0 bg-info2 bg-white']);
        /*$body['col3'] = $element->writeSmartTag($dom,  $body['row'],
            [$element->class => 'd-md-none d-lg-block col-md-3 px-2 py-2']);*/
        //echo $doc3->saveHTML();
        //print_r($this->getContentInfo());

        /*        $element->writeFragmentElement($dom, $body['col1'], "
        " . $html->requiredHtml() . "
        ");*/

        $element->writeFragmentElement($dom, $body['col1'], $navbarReady);

        return $body;
    }
}