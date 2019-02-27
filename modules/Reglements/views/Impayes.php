<?php
/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * *********************************************************************************** */

class Reglements_Impayes_View extends Vtiger_Index_View
{
    public function process(\App\Request $request)
    {
        $print_pdf = true;
        $viewer = $this->getViewer($request);
        $moduleName = $request->getModule();
        $qualifiedModuleName = $request->getModule(false);
        if ($request->get('mode')) {
            $mode = $request->get('mode');
            if ($mode == 'OrderDetails') {
                $this->getOrderDetails($request);
            } else if ($mode == 'Accompte') {
                //$pdf =Vtiger_PDF_Action::generateEncaissement($request);
                $print_pdf = false;
                $viewer->view('Accompte.tpl', $qualifiedModuleName);
            }

        }
        if ($print_pdf) {
            $viewer->assign('TYPE', $request->get('type'));
            $viewer->view('Impayes.tpl', $qualifiedModuleName);
        }
    }

        public function getOrderDetails($request)
        {
            $num_ord=$request->get('num_ord');

            $viewer = $this->getViewer($request);
            $qualifiedModuleName = $request->getModule(false);

            $OrderDetails=(new \App\Db\Query())->select("*")
                ->where(["num_ordre"=>$num_ord])
                ->from("u_yf_ssingleorders")->all();

            $facture_number=(new \App\Db\Query())->select("number")
                ->where(["num_ordre"=>$num_ord])
                ->distinct()
                ->from("u_yf_finvoice")->all();

            $reglements=(new \App\Db\Query())->select("*")
                ->where(["facture"=>$num_ord])
                ->from("u_yf_reglements r")->all();

            $viewer->assign('ORDERDETAILS', $OrderDetails);
            $viewer->assign('facture_number', $facture_number);
            $viewer->assign('reglements', $reglements);
           /*
            var_dump($OrderDetails);
           var_dump($facture_number);
           */
        }


}
