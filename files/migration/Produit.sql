insert into vtiger_service 
      (serviceid,unit_price,
       code_produit,nom_produit,pscategory,discontinued)
      SELECT  v.crmid,p.R_gion_1,
      p.ctar,p.LIBELLE,p.famille,1
      FROM vtiger_crmentity v, ecommerce.tarif_internet p
      WHERE v.description=p.ctar
      AND setype="Services"
      group by v.crmid

/////////////
/////insertion de tarif_adscom
insert into vtiger_crmentity 
      (setype,createdtime,modifiedtime,description)
      SELECT  'Services','2019-03-12 14:02:20','2019-03-12 14:02:20',ctar
      FROM yetiforceCRM.tarif_adscom 


insert into vtiger_service 
      (serviceid,unit_price,
       code_produit,nom_produit,servicename,discontinued)
      SELECT  v.crmid,p.prix1,
      p.ctar,p.LIBTAR,'adscom',1
      FROM vtiger_crmentity v, yetiforceCRM.tarif_adscom p
      WHERE v.description=p.ctar
      AND setype="Services"
      AND crmid >1248628
      group by v.crmid

////////////////
/////insertion de tarif_kompass_internet
insert into vtiger_crmentity 
      (setype,createdtime,modifiedtime,description)
      SELECT  'Services','2019-03-12 14:02:20','2019-03-12 14:02:20',ctar
      FROM yetiforceCRM.tarif_kompass_internet 


insert into vtiger_service 
      (serviceid,unit_price,
       code_produit,nom_produit,servicename,discontinued)
      SELECT  v.crmid,p.prix1,
      p.ctar,p.LIBTAR,'kompass_internet',1
      FROM vtiger_crmentity v, yetiforceCRM.tarif_kompass_internet p
      WHERE v.description=p.ctar
      AND setype="Services"
      AND crmid >1248634
      group by v.crmid



////////////////
/////insertion de tarif_kompass_papier
insert into vtiger_crmentity 
      (setype,createdtime,modifiedtime,
       description,attention,
       status,users,modifiedby)
      SELECT  'Services','2019-03-12 15:39:20','2019-03-12 15:39:20',
              ctar, prix1,
              LIBTAR,TTAR,distrib
      FROM yetiforceCRM.tarif_kompass_papier 


insert into vtiger_service 
      (serviceid,unit_price,
       code_produit,nom_produit,
       servicename,discontinued,
       service_no,distrib)
      SELECT  crmid,attention,
              description,status,
             1,1,
             users,modifiedby
      FROM vtiger_crmentity 
      WHERE setype="Services"
      AND crmid >1295004
      group by crmid

/////////////////
/////insertion de tarif_tlc_papier
insert into vtiger_crmentity 
      (setype,createdtime,modifiedtime,
       description,attention,
       status,users,modifiedby)
      SELECT  'Services','2019-03-13 15:39:20','2019-03-13 15:39:20',
              ctar, prix1,
              LIBTAR,TTAR,distrib
      FROM yetiforceCRM.tarif_tlc_papier 
///////////////////////
DELETE FROM `vtiger_service` WHERE servicename='tarif_tlc_papier'
/////////////////////

insert into vtiger_service 
      (serviceid,unit_price,
       code_produit,nom_produit,
       servicename,discontinued,
       service_no,distrib)
      SELECT  crmid,attention,
              description,status,
             'tarif_tlc_papier',1,
             users,modifiedby
      FROM vtiger_crmentity 
      WHERE setype="Services"
      AND crmid >1293969
      group by crmid



/////insertion de tarif_Kompass_papier
insert into vtiger_crmentity 
      (setype,createdtime,modifiedtime,
       description,attention,
       status,users,modifiedby)
      SELECT  'Services','2019-03-19 15:39:20','2019-03-19 15:39:20',
              ctar, prix1,
              LIBTAR,TTAR,distrib
      FROM yetiforceCRM.tarif_kompass_papier 
///////////////////////

/////////////////////

insert into vtiger_service 
      (serviceid,unit_price,
       code_produit,nom_produit,
       servicename,discontinued,
       service_no,distrib)
      SELECT  crmid,attention,
              description,status,
             'tarif_tlc_papier',1,
             users,modifiedby
      FROM vtiger_crmentity 
      WHERE setype="Services"
      AND crmid >1295058
      group by crmid