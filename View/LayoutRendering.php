<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 05.06.18
 * Time: 17:07
 */

namespace view;


class LayoutRendering
{

    public static function basicLayout(TemplateView $contentView){
        $view = new TemplateView("layout.php");
        $view->header = (new TemplateView("header.php"))->render();
        $view->content = $contentView->render();
        $view->footer = (new TemplateView("footer.php"))->render();
        echo $view->render();
    }

}