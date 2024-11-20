<?php

if (!defined('DIR_CORE')) {
    header('Location: static_pages/');
}

class ControllerPagesTeapplixTeapplix extends AController {

    public function main()
    {
        $this->document->initBreadcrumb(
            [
                'href'      => $this->html->getSecureURL('index/home'),
                'text'      => $this->language->get('text_home'),
                'separator' => false
            ]
        );
        $this->document->addBreadcrumb(
            [
                'href'      => $this->html->getSecureURL('teapplix/teapplix'),
                'text'      => $this->language->get('teapplix_name'),
                'separator' => ' :: ',
                'current'   => true
            ]
        );
        $this->view->batchAssign($this->data);
        $this->processTemplate('pages/teapplix/teapplix.tpl');

    }

}
?>
