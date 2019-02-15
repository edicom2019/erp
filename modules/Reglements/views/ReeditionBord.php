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

class Reglements_ReeditionBord_View extends Vtiger_Index_View
{
    public function process(\App\Request $request)
    {
        $print_pdf = true;
        if ($request->get('mode')) {
            $mode = $request->get('mode');
            if ($mode == 'ReeditionBord') {
                //$pdf =Vtiger_PDF_Action::generateEncaissement($request);
                $print_pdf = false;
                $this->ReeditionBord($request);
            }

        }
        if ($print_pdf) {
            $viewer = $this->getViewer($request);
            $moduleName = $request->getModule();
            $qualifiedModuleName = $request->getModule(false);
            $viewer->assign('BANQUE', $request->get('banque'));
            $viewer->assign('DATE', $request->get('date_echeance'));
            $viewer->assign('BORDERAU', $request->get('bordereau'));
            $viewer->assign('TYPE', $request->get('type'));
            $viewer->view('ReeditionBord.tpl', $qualifiedModuleName);
        }
    }
    public function ReeditionBord($request)
    {

        $DES="BORDEREAU DES REMISE DES VALEURS";

        $bordereau =  $request->get('bordereau');


        $encaissements=(new \App\Db\Query())->select("inv.number,acc.accountname,acc.ville,r.date_valeur,r.reg_a_recevoir,r.bordereau,r.type,r.banque,r.montant,r.banque,r.libelle,r.banque_edicom")
            ->leftJoin('u_yf_finvoice inv','inv.finvoiceid=r.factu')
            ->leftJoin('vtiger_account acc','inv.accountid=acc.accountid')
            ->where(["bordereau"=>$bordereau])
            ->from("u_yf_reglements r")->all();

        $sommes=(new \App\Db\Query())->select("sum(r.montant) as somme")
            ->where(["bordereau"=>$bordereau])
            ->from("u_yf_reglements r")->all();

        $banque_edicom=(new \App\Db\Query())->select("r.banque_edicom as banque_edicom")
            ->where(["bordereau"=>$bordereau])
            ->from("u_yf_reglements r")->distinct()->all();


        $mode_reglem=(new \App\Db\Query())->select("r.mode_reg as mode_reg")
            ->where(["bordereau"=>$bordereau])
            ->from("u_yf_reglements r")->distinct()->all();

        /* $viewer->assign('ENCAISSEMENTS', $encaissements);
         $viewer->assign('SOMMES', $sommes);
         $viewer->view('genererPDF.tpl', $qualifiedModuleName);*/
        foreach ($banque_edicom as &$banque) {
            if($banque['banque_edicom'] =="BANQUE POPULAIRE") {

                $banque = "BANQUE POPULAIRE";
                $agence = "AGENCE Al Moukaouama";
                $RIB = "190 780 21211 3030639 000 1 41";
                $img = '<br><img src="http://100.1.1.8/ERP/erptest/public_html/layouts/resources/Logo/bp.png" />';
            }
            else
            {
                $banque="SGMB";
                $agence="AGENCE BIR ANZARANE";
                $RIB="022 780 000 054 00 051035 31/74";
                $img='<br><img src="http://100.1.1.8/ERP/erptest/public_html/layouts/resources/Logo/societe-generale.png" style="width: 150px;height: 140px;margin-top: -40px" />';
            }
        }
        foreach ($mode_reglem as &$mode_reg) {
            if($mode_reg['mode_reg'] =="Chèque") {
                $type="CHEQUE";
            }
            else
            {
                $type="EFFETS";
            }
        }
        $html2pdf = new Html2Pdf('P','A4','fr');
        $html2pdf->pdf->SetAuthor('Encaissement');
        $html2pdf->pdf->SetTitle('Encaissement');
        $pagination='<page><page_footer> [[page_cu]]/[[page_nb]]</page_footer></page>';
        $html2pdf->writeHTML($pagination);
        foreach ($encaissements as &$encaissement) {
        }
        foreach ($sommes as &$somme) {
        }
        $header = ' '.$img.'<h3>Edicom SA</h3>
                            <strong style="margin-left: 80px;font-weight: 500;">'.$agence.'</strong> <br><br>
                            <strong style="margin-left: 80px;font-weight: 500;">'.$encaissement["banque_edicom"].'</strong>:<strong> '.$RIB.'</strong><br> <br>
                            <strong style="margin-left: 80px;">'.$DES.'</strong> <strong style="margin-left: 200px"> N° '.$encaissement["bordereau"].' </strong> <br><br>
                            <strong style="margin-left: 80px;font-size: 12px">'.$type.'</strong><br><br>';
        $footer=' <strong style="margin-left: 80px;">LE RESPONSABLE DE L\'AGENCE</strong> <strong style="margin-left: 200px"> LE CLIENT </strong> <br><br> ';


        if($banque['banque_edicom'] =="BANQUE POPULAIRE")
            {
                $html2pdf->writeHTML($header);
                $body = '';
                foreach ($encaissements as &$encaissement) {
                    $body .= '
                <tr >
                 <td style="border: 1px solid black;height: 20px;">' . $encaissement["number"] . '</td>
                 <td  style="border: 1px solid black;height: 20px;">' . $encaissement["accountname"] . '</td>
                 <td  style="border: 1px solid black;height: 20px;">' . $encaissement["ville"] . '</td>
                 <td  style="border: 1px solid black;height: 20px;">' . $encaissement["libelle"] . ' ' . $encaissement["banque"] . '</td>
                 <td  style="border: 1px solid black;height: 20px;text-align: center;">' . $encaissement["date_valeur"] . '</td>
                 <td align="right" style="border: 1px solid black;height: 20px;">' . number_format($encaissement["montant"], 2, '.', ' ') . '</td>
                </tr>';
                }
                $html2pdf->writeHTML(' 
             <table align="center" style="border-collapse: collapse; border: 1px solid black;">
              <thead>
                <tr style="border: 1px solid grey;">
                    <th style="width: 80px;width;height: 20px;background-color: #e9ecef;text-align: center; border: 1px solid black;" >
                        Facture
                    </th>
                    <th style="width: 170px;width;height: 20px;background-color: #e9ecef;text-align: center; border: 1px solid black;">
                        Raison sociale
                    </th>
                    <th style="width: 100px;width;height: 20px;background-color: #e9ecef;text-align: center; border: 1px solid black;">
                        Ville
                    </th>
                    <th style="width: 170px;width;height: 20px;background-color: #e9ecef;text-align: center; border: 1px solid black;">
                        réference
                    </th>
                    <th style="width: auto;width;height: 20px;background-color: #e9ecef;text-align: center; border: 1px solid black;">
                        date valeur
                    </th>
                    <th style="width: 80px;width;height: 20px;background-color: #e9ecef;text-align: center; border: 1px solid black;">
                        Montant
                    </th>
                </tr>
                </thead>
                <tbody>
                
            ' . $body . '
            
              <tr >
                    <td colspan="4"  >
                    </td>
                    <td style="border-right: 1px solid black;" >
                       Total Bordereau
                    </td>
                       <td align="right" style="border: 1px solid black;height: 20px;">' . number_format($somme["somme"], 2, '.', ' ') . '</td>
                    </tr>
            </tbody>
            </table>
             <br><br><br><br><br><br>
');
                $html2pdf->writeHTML($footer);


        }
        else
        {
            $html2pdf->writeHTML($header);
            $body='';
            foreach ($encaissements as &$encaissement)
            {
                $body.='
                <tr >
 <td style="border: 1px solid black;height: 20px;">'.$encaissement["number"].'</td>
 <td  style="border: 1px solid black;height: 20px;">'.$encaissement["accountname"].'</td>
 <td  style="border: 1px solid black;height: 20px;">'.$encaissement["ville"].'</td>
 <td  style="border: 1px solid black;height: 20px;">'.$encaissement["libelle"].' '.$encaissement["banque"].'</td>
 <td  style="border: 1px solid black;height: 20px;text-align: center;">'.$encaissement["date_valeur"].'</td>
 <td align="right" style="border: 1px solid black;height: 20px;">'.number_format($encaissement["montant"], 2, '.', ' ').'</td>
</tr>';
            }
            $html2pdf->writeHTML(' 
             <table align="center" style="border-collapse: collapse; border: 1px solid black;">
              <thead>
                <tr style="border: 1px solid grey;">
                    <th style="width: 80px;width;height: 20px;background-color: #e9ecef;text-align: center; border: 1px solid black;" >
                        Facture
                    </th>
                    <th style="width: 170px;width;height: 20px;background-color: #e9ecef;text-align: center; border: 1px solid black;">
                        Raison sociale
                    </th>
                    <th style="width: 100px;width;height: 20px;background-color: #e9ecef;text-align: center; border: 1px solid black;">
                        Ville
                    </th>
                    <th style="width: 170px;width;height: 20px;background-color: #e9ecef;text-align: center; border: 1px solid black;">
                        réference
                    </th>
                    <th style="width: auto;width;height: 20px;background-color: #e9ecef;text-align: center; border: 1px solid black;">
                        date valeur
                    </th>
                    <th style="width: 80px;width;height: 20px;background-color: #e9ecef;text-align: center; border: 1px solid black;">
                        Montant
                    </th>
                </tr>
                </thead>
                <tbody>
                
            '.$body.'
            
              <tr >
                    <td colspan="4"  >
                    </td>
                    <td style="border-right: 1px solid black;" >
                       Total Bordereau
                    </td>
                       <td align="right" style="border: 1px solid black;height: 20px;">'.number_format($somme["somme"], 2, '.', ' ').'</td>
                    </tr>
            </tbody>
            </table>
             <br><br><br><br><br><br>
');
            $html2pdf->writeHTML($footer);

        }
        ob_end_clean();
        $html2pdf->output();
    }

}