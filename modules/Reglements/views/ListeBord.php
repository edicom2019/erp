<?php
/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * *********************************************************************************** */
use Spipu\Html2Pdf\Html2Pdf;

class Reglements_ListeBord_View extends Vtiger_Index_View
{
    public function process(\App\Request $request)
    {
        $print_pdf=true;
        if ($request->get('mode')) {
            $mode = $request->get('mode');
            if($mode == 'listeBordNonEnvoyePDF')
            {
                //$pdf =Vtiger_PDF_Action::generateEncaissement($request);
                $print_pdf=false;
                $this->listeBordNonEnvoyePDF($request);
            }

        }
        if($print_pdf) {
            $viewer = $this->getViewer($request);
            $moduleName = $request->getModule();
            $qualifiedModuleName = $request->getModule(false);
            $viewer->assign('BANQUE', $request->get('banque'));
            $viewer->assign('DATE', $request->get('date_echeance'));
            $viewer->assign('BORDERAU', $request->get('bordereau'));
            $viewer->assign('TYPE', $request->get('type'));
            $viewer->view('ListeBord.tpl', $qualifiedModuleName);
        }
    }
    public function listeBordNonEnvoyePDF($request)
    {
        $bord=0;
        $dateD =  $request->get('dated');
        $dateD= date('Y-m-d',strtotime(str_replace('/', '-', $dateD)));
        $dateF =  $request->get('dateF');
        $dateF= date('Y-m-d',strtotime(str_replace('/', '-', $dateF)));

        $date= (new \DateTime())->format('d/m/Y ');
        $header = '<h4> <strong style="font-size: 16px;font-weight: 400">Société :</strong>Edicom SA <strong style="margin-left: 100px">Liste des réglements non envoyés</strong><strong style="margin-left: 100px"><strong style="font-size: 16px;font-weight: 400">Date</strong> :'.$date.'</strong></h4>';
        $pagination='<page><page_footer> [[page_cu]]/[[page_nb]]</page_footer></page>';

        $encaissements=(new \App\Db\Query())->select("acc.accountname,acc.ville,r.date_valeur,r.reg_a_recevoir,r.bordereau,r.type,r.banque,r.montant,r.banque,r.libelle,r.mode_reg")
            ->leftJoin('u_yf_finvoice inv','inv.finvoiceid=r.factu')
            ->leftJoin('vtiger_account acc','inv.accountid=acc.accountid')
            ->where(['between', 'date_valeur', $dateD, $dateF ])
            ->andWhere(['=','bordereau', $bord])
            ->from("u_yf_reglements r")->all();

        $html2pdf = new Html2Pdf('P','A4','fr');
        $html2pdf->pdf->SetAuthor('Liste des réglements non envoyés');
        $html2pdf->pdf->SetTitle('Liste des réglements non envoyés');

        $html2pdf->writeHTML($pagination);
        $html2pdf->writeHTML($header);

        $body='';
        foreach ($encaissements as &$encaissement)
        {
            $body.=' <tr>
       <!--rowspan="2"--> <td  style="border: 1px solid black;height: 20px;">'.$encaissement["accountname"].'</td>
        <td style="border: 1px solid black;height: 20px;">'.$encaissement["banque"].'</td>
        <td style="border: 1px solid black;height: 20px;">'.$encaissement["ville"].'</td>
       <!--rowspan="2"--> <td  style="border: 1px solid black;height: 20px;">'.$encaissement["libelle"].' '.$encaissement["date_valeur"].'</td>
        <td  style="border: 1px solid black;height: 20px;">'.$encaissement["mode_reg"].' </td>
       <td align="right" style="border: 1px solid black;height: 20px;">'.number_format($encaissement["montant"], 2, '.', ' ').'</td>
    </tr>';
        }
        $html2pdf->writeHTML('  
  <br><br><br>
  
<table align="center" style="border-collapse: collapse; border: 1px solid black;">
    <tr>
        <!--rowspan="2"--><td   style="width: 130px;width;height: 20px;background-color: #e9ecef;text-align: center; border: 1px solid black;"> TIR / Tireur</td>
        <td  style="width: 120px;width;height: 20px;background-color: #e9ecef;text-align: center; border: 1px solid black;">BANQUE</td>
        <td  style="width: 120px;width;height: 20px;background-color: #e9ecef;text-align: center; border: 1px solid black;">VILLE</td>
      <!--  <td colspan="2"  style="width: 170px;width;height: 20px;background-color: #e9ecef;text-align: center; border: 1px solid black;">
           DOMOCILIATION
        </td>-->
        <!--rowspan="2"--><td   style="width: 130px;width;height: 20px;background-color: #e9ecef;text-align: center; border: 1px solid black;">N° du chèque / effet</td>
        <td   style="width: 90px;width;height: 20px;background-color: #e9ecef;text-align: center; border: 1px solid black;">Mode de réglement</td>
        <!--rowspan="2"--><td   style="width: 120px;width;height: 20px;background-color: #e9ecef;text-align: center; border: 1px solid black;">Montant</td>
    </tr>
    <!--<tr>
        
    </tr>-->
    <tbody>
    '.$body.'
</tbody>
   
</table>
           
           
           
');
        ob_end_clean();
        $html2pdf->output();
    }

}