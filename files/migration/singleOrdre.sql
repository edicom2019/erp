insert into u_yf_ssingleorders_inventory
  (id,name,qty,
   price,gross,net,
   tax,total,
   ref,discount)
SELECT u.ssingleordersid ,s.serviceid,f.qte,
         f.prix_unit,f.MTAX,f.MTAX ,
         f.ttax,u.sum_total,
         r.rubriquesid,f.mtrem

  FROM yetiforceCRM.FIC_LIORDRE f
  INNER JOIN u_yf_ssingleorders u ON u.num_ordre=f.nord
  INNER JOIN vtiger_service s ON  f.ctar = s.code_produit
  left JOIN u_yf_rubriques r ON r.code_rubrique = f.nprod
  where f.nord= 153653
  group by u.ssingleordersid ,f.qte, f.prix_unit

  ////////////
  insert into u_yf_ssingleorders_inventory
            (id,name,qty,
             price,gross,net,
             tax,total,
             ref,discount)
  SELECT u.ssingleordersid,s.serviceid,f.qte,
         f.prix_unit,f.MTAX,f.MTAX ,
         f.ttax,u.sum_total,
         r.rubriquesid,f.mtrem

  FROM yetiforceCRM.FIC_LIORDRE f
  INNER JOIN u_yf_ssingleorders u ON u.num_ordre=f.nord
INNER JOIN vtiger_service s ON  f.ctar = s.code_produit
left JOIN u_yf_rubriques r ON r.code_rubrique = f.nprod
  where f.nord= 153653
  and s.servicename=f.nste
  and s.distrib=f.distrib
  and s.service_no ='N'
  ////////////


  ////////////////////

////////////////////////
  insert into u_yf_ssingleorders_inventory
            (id,name,qty,
             price,gross,net,
             tax,total,
             ref,discount)
  SELECT u.ssingleordersid,s.serviceid,f.qte,
         f.prix_unit,f.MTAX,f.MTAX ,
         f.ttax,u.sum_total,
         r.rubriquesid,f.mtrem

  FROM yetiforceCRM.FIC_LIORDRE f
  INNER JOIN u_yf_ssingleorders u ON u.num_ordre=f.nord
INNER JOIN vtiger_service s ON  f.ctar = s.code_produit
left JOIN u_yf_rubriques r ON r.code_rubrique = f.nprod
  where f.nord= 153653
  and s.servicename=f.nste
  and s.distrib=f.distrib
  and s.service_no ='A'
  and s.code_produit not in 
  (
        SELECT s.code_produit 
  FROM yetiforceCRM.FIC_LIORDRE f
  INNER JOIN u_yf_ssingleorders u ON u.num_ordre=f.nord
INNER JOIN vtiger_service s ON  f.ctar = s.code_produit
  where s.servicename=f.nste
  and s.distrib=f.distrib
  and s.service_no ='N'
  )