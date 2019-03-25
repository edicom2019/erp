
////////////
insert into u_yf_finvoice_inventory
            (id,name,qty,
             price,gross,net,
             tax,total,
             ref,discount)
    SELECT u.finvoiceid ,
          (SELECT serviceid FROM vtiger_service where 
           f.ctar = code_produit limit 1) AS serviceid,f.qte,
         f.prix_unit,f.MTAX,f.MTAX ,
         f.ttax,u.sum_total,
         r.rubriquesid,f.mtrem
         
  FROM dev5.fic_liordre f 
  INNER JOIN u_yf_finvoice u ON u.num_ordre=f.nord  and u.marque =f.nste
  left JOIN u_yf_rubriques r ON r.code_rubrique = f.nprod
   where f.nord= 145498
////////////////////

  