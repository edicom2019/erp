//////// insertion dans  vtiger_crmentity
insert into vtiger_crmentity(setype,createdtime,modifiedtime,
                             description)
  
select 'FInvoice','2019-03-23 23:48:32','2019-03-23 23:48:32',
        id_facture 
        from factura.FIC_FACTURE1

////// ajouter un champs dans la table FIC_FACTURE et faire join avec table vtiger_crmentity
UPDATE  FIC_FACTURE1 f
        INNER JOIN (select crmid,attention,description,setype  FROM dev5.vtiger_crmentity) c
        set  f.setType = c.crmid
        WHERE f.id_facture=c.description
        AND c.setype='FInvoice'

          
//// Ajout champs id_firme pour faire laison entre Account et fic_facture
ALTER TABLE `fic_facture` ADD `id_firme` INT(11) NOT NULL AFTER `setType`;
UPDATE  FIC_FACTURE f
        INNER JOIN (select accountid,code_firme  FROM dev5.vtiger_account) c
        set  f.id_firme = c.accountid
        WHERE f.cfir=c.code_firme

///////
///////////////// insertion  entetes des factures(105139)
 insert into u_yf_finvoice 
  (finvoiceid,number,
    saledate,

    accountid,sum_total,sum_gross,
    num_ordre,num_bc,commercial,
    edition)

SELECT f.setType,f.NFACT,
concat(substring(f.dord,1,4),'-',
       substring(f.dord,5,2),'-',
       substring(f.dord,7,2) ) as saledate,
       f.id_firme,f.MTHT_TAXE,f.MTFACT,
       f.Nord,f.Nord,f.CREP ,
       f.nedi
FROM factura.FIC_FACTURE1 f

///// faire la liaison entre facture et bon de commande
update u_yf_finvoice f 
  INNER JOIN (SELECT ssingleordersid,num_ordre,support FROM u_yf_ssingleorders) s
  set f.ssingleordersid=s.ssingleordersid 
              where s.num_ordre=f.num_ordre 
              AND s.support = f.marque
    
////////////


SELECT a.code_firme  FROM 
`vtiger_account` a 
INNER JOIN yetiforceCRM.FIC_FACTURE f ON f.cfir=a.code_firme  

group by a.accountid 

update u_yf_finvoice u,vtiger_account a
	set u.accountid=a.accountid 
	where u.accountid =a.code_firme 
	AND u.accountid != 3012832

update u_yf_finvoice u,FIC_FACTURE a
	set u.accountid=a.accountid 
	where u.Nord =a.num_ordre 
	AND u.accountid = 3493

// modification support
SELECT a.Nord,a.nste , a.tedi 
from  u_yf_finvoice u
INNER JOIN dev2.FIC_FACTURE a ON
 a.Nord = u.num_ordre
group by a.Nord

update 
 u_yf_finvoice u
INNER JOIN dev2.FIC_FACTURE a ON
 a.Nord = u.num_ordre
 set u.marque ='Telecontact'
 where a.nste =3
AND u.invoiceid=58957

update 
 u_yf_finvoice u
INNER JOIN 
( SELECT nord,nste,tedi from yetiforceCRM.FIC_FACTURE  group by Nord,nste ) a ON
 a.Nord = u.num_ordre
 set u.marque ='Telecontact'
 where a.nste =3
AND u.num_ordre !=118153

///// modification type ordre
SELECT a.Nord,a.nste , a.tedi 
from  u_yf_finvoice u
INNER JOIN dev2.FIC_FACTURE a ON
 a.Nord = u.num_ordre
group by a.Nord

update 
 u_yf_finvoice u
INNER JOIN dev2.FIC_FACTURE a ON
 a.Nord = u.num_ordre
 set u.type_ordre ='Papier'
 where a.nste =3
 AND a.tedi=1
AND u.num_ordre=58957



update 
 u_yf_finvoice u
INNER JOIN 
( SELECT nord,nste,tedi from dev2.FIC_FACTURE  group by Nord ) a ON
 a.Nord = u.num_ordre
 set u.type_ordre ='Papier'
 where a.nste =3
 AND a.tedi=1

update 
 u_yf_finvoice u
INNER JOIN 
( SELECT nord,nste,tedi from dev2.FIC_FACTURE  group by Nord ) a ON
 a.Nord = u.num_ordre
 set u.type_ordre ='Papier'
 where a.nste =3
 AND a.tedi=2

 SELECT NORD, COUNT(NORD) nbre FROM FIC_FACTURE GROUP by NORD HAVING nbre=1


 UPDATE u_yf_finvoice set type_ordre='Social Media Optimisation' WHERE marque='Adscom' AND type_ordre=3

 ///Telecontact
 UPDATE u_yf_finvoice set type_ordre='Papier' WHERE marque='Telecontact' AND type_ordre=1
 UPDATE u_yf_finvoice set type_ordre='Internet' WHERE marque='Telecontact' AND type_ordre=2


//Kompass
UPDATE u_yf_finvoice set type_ordre='Papier' WHERE marque='Kompass' AND type_ordre=1
UPDATE u_yf_finvoice set type_ordre='Internet' WHERE marque='Kompass' AND type_ordre=4
UPDATE u_yf_finvoice set type_ordre='Vente kompass' WHERE marque='Kompass' AND type_ordre=5

//responsable 

UPDATE u_yf_finvoice f INNER JOIN (select responsable,ossemployeesid from vtiger_ossemployees GROUP by responsable) o ON o.responsable =f.commercial set f.commercial=o.ossemployeesid

SELECT o.ossemployeesid,f.commercial  
FROM u_yf_finvoice f
INNER JOIN vtiger_ossemployees o ON
 o.responsable =f.commercial







///////////////////liaison de bon de commande avec factures
update u_yf_finvoice f 
  INNER JOIN (SELECT ssingleordersid,num_ordre,support FROM u_yf_ssingleorders) s
  set f.ssingleordersid=s.ssingleordersid 
              where s.num_ordre=f.num_ordre 
              AND s.support = f.marque
              AND f.finvoiceid = 281604