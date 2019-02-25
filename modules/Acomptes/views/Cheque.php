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
class Acomptes_Cheque_View extends Vtiger_Index_View
{
    public function process(\App\Request $request)
    {
        $print_pdf=true;
        if($request->get('mode') ){
            $mode = $request->get('mode');
            if($mode == 'getEncaissement')
            {
                $reglements=$this->getEncaissement($request);
                echo $reglements; die;
            }

            else if($mode == 'updateBordereau')
            {
                $this->updateBordereau($request);
            }
            else if($mode == 'genererPDF')
            {
                //$pdf =Vtiger_PDF_Action::generateEncaissement($request);
                $print_pdf=false;
                $this->generer($request);
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
            $viewer->assign('EFFET', $request->get('nbr_effets'));
            $viewer->assign('NBORDEREAU', $request->get('nbr_bordereaux'));
            $viewer->view('Cheque.tpl', $qualifiedModuleName);
        }
    }




    public function getEncaissement($request)
    {
        $date_echeance=$request->get('date_echeance');
        $date_echeance= date('Y-m-d',strtotime(str_replace('/', '-', $date_echeance)));
        if($request->get('banque')=='BP')
            $banque="BANQUE POPULAIRE";
        else  if($request->get('banque')=='SG')
            $banque="SGMB";

        if($request->get('type')==1)
            $type="Effet";
        else
            if($request->get('type')==2)
                $type="Cheque sur place";
        else
            if($request->get('type')==3)
                $type="Cheque hors place";
       /* echo $banque;
        echo $type;
        echo $date_echeance;
        die();*/
        /*$db = \App\Db::getInstance();
        $count_reglements=$db->select(['count(*)'])->from('u_yf_reglements')->where(['date_valeur' => $date_echeance,"banque"=> $banque,"type"=>$type])->createCommand()->execute();
        var_dump($count_reglements); die;*/
        /*$date_echeance= date('Y-m-d', strtotime(str_replace('/', '-', $date_echeance)));
        */

        $d=date('Y-m-d');
        /*  echo "SELECT  inv.number,acc.accountname,acc.ville,r.date_valeur,r.reg_a_recevoir,r.bordereau,r.type,r.banque  FROM u_yf_reglements r
          left outer join u_yf_finvoice inv on inv.finvoiceid=r.facture
          left outer join vtiger_account acc on inv.accountid=acc.accountid
       WHERE r.banque = '$banque' AND r.type = '$type' AND date_valeur = '$date_echeance' "; die;*/
        $dbconfig = AppConfig::main('dbconfig');
        /* var_dump($date_echeance);*/
        /*$response = new Vtiger_Response();
       $response->setResult($date_echeance);
       $response->emit();
       die();*/
        $mysqli = new mysqli($dbconfig['db_server'], $dbconfig['db_username'], $dbconfig['db_password'], $dbconfig['db_name'],$dbconfig['db_port']);
        $query = $mysqli->query("SELECT count(*) as cnt FROM u_yf_acomptes a WHERE a.banque_edicom like '$banque' AND a.type like '$type' AND date_valeur = '$date_echeance' ");/*CURDATE()*/
        $reglements = $query->fetch_assoc()["cnt"];
        $mysqli->close();
        return $reglements;
    }

    public function updateBordereau($request)
    {
        $date_echeance =  $request->get('date_echeance');
        /*$date_echeance= date('Y-m-d', strtotime(str_replace('/', '-', $date_echeance)));*/
        $date_echeance= date('Y-m-d',strtotime(str_replace('/', '-', $date_echeance)));
        $bordereau =  $request->get('bordereau');
        if($request->get('banque')=='BP')
            $banque="BANQUE POPULAIRE";
        else  if($request->get('banque')=='SG')
            $banque="SGMB";

        if($request->get('type')==1)
            $type="Effet";
        else
            if($request->get('type')==2)
                $type="Cheque sur place";
            else
                if($request->get('type')==3)
                    $type="Cheque hors place";
        $dbconfig = AppConfig::main('dbconfig');

        $mysqli = new mysqli($dbconfig['db_server'], $dbconfig['db_username'], $dbconfig['db_password'], $dbconfig['db_name'],$dbconfig['db_port']);
        $query = $mysqli->query("UPDATE u_yf_acomptes a SET bordereau='$bordereau' WHERE a.banque_edicom = '$banque' AND a.type like '$type' AND date_valeur = '$date_echeance' ");
        $mysqli->close();

    }


    public function generer($request)
    {
        $t="CHEQUES";
        $DES="BORDEREAU DES REMISE DES VALEURS";
        $viewer = $this->getViewer($request);
        $qualifiedModuleName = $request->getModule(false);

        $moduleName = $request->getModule();

        $date_echeance =  $request->get('date_echeance');
        $bordereau =  $request->get('bordereau');

        $date_echeance= date('Y-m-d',strtotime(str_replace('/', '-', $date_echeance)));
        if($request->get('banque')=='BP')
        {
            $banque="BANQUE POPULAIRE";
            $agence="AGENCE Al Moukaouama";
            $RIB="190 780 21211 3030639 000 1 41";
            $img='<br><img src="http://100.1.1.8/ERP/erptest/public_html/layouts/resources/Logo/bp.png" />';

        }

        else  if($request->get('banque')=='SG')
        {
            $banque="SGMB";
            $agence="AGENCE BIR ANZARANE";
            $RIB="022 780 000 054 00 051035 31/74";
            $img='<br><img src="http://100.1.1.8/ERP/erptest/public_html/layouts/resources/Logo/societe-generale.png" style="width: 150px;height: 140px;margin-top: -40px" />';

        }
           if($request->get('type')==2)
                $type="Cheque sur place";
            else
                if($request->get('type')==3)
                    $type="Cheque hors place";

        $encaissements=(new \App\Db\Query())->select("inv.number,acc.accountname,acc.ville,a.date_valeur,a.reg_a_recevoir,a.bordereau,a.type,a.banque,a.montant,a.banque,a.libelle,a.baque_edicom")
            ->leftJoin('u_yf_finvoice inv','inv.finvoiceid=a.factu')
            ->leftJoin('vtiger_account acc','inv.accountid=acc.accountid')
            ->where(["baque_edicom"=>$banque,"type"=>$type,"date_valeur"=>$date_echeance,"bordereau"=>$bordereau])
            ->from("u_yf_acomptes a")->all();

        $sommes=(new \App\Db\Query())->select("sum(a.montant) as somme")
            ->where(["baque_edicom"=>$banque,"type"=>$type,"date_valeur"=>$date_echeance,"bordereau"=>$bordereau])
            ->from("u_yf_acomptes a")->all();
        $viewer->assign('ENCAISSEMENTS', $encaissements);
        $viewer->assign('SOMMES', $sommes);
        $viewer->view('genererPDF.tpl', $qualifiedModuleName);


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
                            <strong style="margin-left: 80px;font-weight: 500;">'.$encaissement["baque_edicom"].'</strong>:<strong> '.$RIB.'</strong><br> <br>
                            <strong style="margin-left: 80px;">'.$DES.'</strong> <strong style="margin-left: 200px"> N° '.$encaissement["bordereau"].' </strong> <br><br>
                            <strong style="margin-left: 80px;font-size: 12px">'.$t.'</strong><br><br>';
          $footer=' <strong style="margin-left: 80px;">LE RESPONSABLE DE L\'AGENCE</strong> <strong style="margin-left: 200px"> LE CLIENT </strong> <br><br> ';


        if($request->get('banque')=='BP')
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
    else  if($request->get('banque')=='SG')
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
    public function getFooterScripts(\App\Request $request)
    {
        $headerScriptInstances = parent::getFooterScripts($request);
        $moduleName = $request->getModule();

        $jsFileNames = [
            "modules.$moduleName.resources.Encaissement",
        ];

        $jsScriptInstances = $this->checkAndConvertJsScripts($jsFileNames);
        $headerScriptInstances = array_merge($headerScriptInstances, $jsScriptInstances);

        return $headerScriptInstances;
    }
}
