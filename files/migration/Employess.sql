lancer une requete pour les employes qui existe
UPDATE `vtiger_ossemployees` SET `type_emp` = 'Employé'

create table comm as  SELECT c.CREP,v.crmid as crmid  , c.NREP ,c.ADRS,
c.VILL,c.TELE1,c.PATE, c.TVA,
c.NREPTRI,c.NFACT,c.BANQUE,c.COMPTE
,c.EQUIPE,c.CHEF,c.POOL,
c.INITIALE_RESPONSABLE,c.TANN,c.TMAJ,
c.TPSP,c.CREP_GROUPE,c.CREP_EQUIPE,
c.EMAIL,c.ICE,c.ENTREPRENEUR,c.setType,
c.type_emp,c.status_ffreelancer,
c.direc_affectation
FROM ecommerce.commerciaux c , vtiger_crmentity v
where c.CREP =v.smownerid
AND v.crmid>14281
group by c.CREP,v.crmid

ALTER TABLE `comm` CHANGE `ICE` `ICE` VARCHAR(25) NULL DEFAULT NULL;
ALTER TABLE `comm` CHANGE `COMPTE` `COMPTE` BIGINT(24) NULL DEFAULT NULL;
ALTER TABLE `comm` CHANGE `CHEF` `CHEF` BIGINT(10) NULL DEFAULT NULL;

UPDATE vtiger_ossemployees set etat='ACTIF' where  type_emp='Freelancer'
UPDATE vtiger_ossemployees set service_affectation='COMMERCIALE' where  type_emp='Freelancer'

