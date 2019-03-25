//////////////// insertion dans vtiger_crmentity
insert into vtiger_crmentity(
                           setype,
                           createdtime,
                           modifiedtime,description)

select  'Reglements',
       '2019-03-05 14:02:20',
       '2019-03-05 14:02:20',
       id_reg
       FROM factura.FIC_REGLEM3
/////////// recuperer crmid et lier avec les elements de fic_reglem3
UPDATE  FIC_reglem3 f
        INNER JOIN (select crmid,attention,description,setype
                    FROM dev5.vtiger_crmentity) c
        set  f.crmid = c.crmid
        WHERE f.id_reg=c.description        
        AND c.setype='Reglements'

//////////// recuperer finvoiceid 
ALTER TABLE `FIC_REGLEM3` ADD `finvoiceid` INT(11) NOT NULL AFTER `crmid`;

UPDATE  FIC_reglem3 f
        INNER JOIN (select number,finvoiceid,num_ordre,marque
                    FROM dev5.u_yf_finvoice) i
        set  f.finvoiceid = i.finvoiceid
        WHERE f.NFACT=i.number
        AND f.NORD = i.num_ordre
        AND f.NSTE = i.marque        
        

////////////////// requete d insertion les reglements

 insert into u_yf_reglements(reglementsid,libelle,banque_edicom,
                            mode_reg,finvoiceid,
                            factu,montant,bordereau,
                            date_reg,date_valeur,impaye ,
                            type,banque                                                      
                           )      
       select         
       f.crmid,f.LIBF,f.BANQUE,
       f.MREG ,f.finvoiceid ,
       f.MTRG,f.BORD,f.NFACT,       
       concat(substring(f.DREG,1,4),'-',
       substring(f.DREG,5,2),'-',
       substring(f.DREG,7,2) ) as date_reg , 
       
       concat(substring(f.DVAL,1,4),'-',
       substring(f.DVAL,5,2),'-',
       substring(f.DVAL,7,2) ) as date_valeur , imp,
       f.TYPE_CH,f.CODE_BANQUE
      
       FROM factura.FIC_REGLEM3 f
       
       
/////////
      //mode_reg
        UPDATE `u_yf_reglements` SET `mode_reg` = 'Effet' WHERE mode_reg ='F'
        UPDATE `u_yf_reglements` SET `mode_reg` = 'Chèque' WHERE mode_reg ='C'
        UPDATE `u_yf_reglements` SET `mode_reg` = 'Espèce' WHERE mode_reg ='E'
        UPDATE `u_yf_reglements` SET `mode_reg` = 'Effet Avalisé' WHERE mode_reg ='A'
        UPDATE `u_yf_reglements` SET `mode_reg` = 'Virement' WHERE mode_reg ='V'

//////////Type reglements
    UPDATE `u_yf_reglements` SET `type` = 'Effet' WHERE type =3
 
///////////////////////
update 
 yetiforceCRM.FIC_REGLEM2 f
INNER JOIN vtiger_crmentity c ON
 f.id_reg =c.id_reg 
 set f.crmid =c.crmid
 where  setype='Reglements'

       select id_reg FROM vtiger_crmentity where setype='Reglements';
       ////////////////
   

////////////
insert into FIC_REGLEM2(  
  `NSTE`, `NORD`, `DREG`, `DVAL`,
       `BORD`, `MREG`, `LIBF`, `NFACT`,
       `MTRG`, `MTAX`, `IMP`, `IMP_OLD`,
       `DATED_IMP`, `DATEF_IMP`, `NBOR_IMP`,
       `NBOR_IMP_LIG`, `NBOR_COM`, `NBOR_COM_LIG`,
       `NUM_ECHEANCE`, `NUMLIG`, `DATECR`, `INITCR`,
       `DATEMAJ`, `INITMAJ`, `DATE_VERS`, `DATE_ENCAIS`,
       `VILLE`, `TYPE_CH`, `DATE_IMPAYE`, `NBOR_IMP2`,
       `NBOR_IMP2_LIG`, `CODE_BANQUE`, `NUMREG`, `TYPE_REG`,
       `CODE_TELEACTEUR`, `BANQUE` )

1//
Create table FIC_REGLEM3 AS
SELECT `NSTE`, `NORD`, `DREG`, `DVAL`,
       `BORD`, `MREG`, `LIBF`, `NFACT`,
       `MTRG`, `MTAX`, `IMP`, `IMP_OLD`,
       `DATED_IMP`, `DATEF_IMP`, `NBOR_IMP`,
       `NBOR_IMP_LIG`, `NBOR_COM`, `NBOR_COM_LIG`,
       `NUM_ECHEANCE`, `NUMLIG`, `DATECR`, `INITCR`,
       `DATEMAJ`, `INITMAJ`, `DATE_VERS`, `DATE_ENCAIS`,
       `VILLE`, `TYPE_CH`, `DATE_IMPAYE`, `NBOR_IMP2`,
       `NBOR_IMP2_LIG`, `CODE_BANQUE`, `NUMREG`, `TYPE_REG`,
       `CODE_TELEACTEUR`, `BANQUE` FROM `FIC_REGLEM`
       where DREG between '20100101' and '20200101'
      


2//
ALTER TABLE `fic_reglem3` ADD `id_reg` INT(11) NOT NULL
 AUTO_INCREMENT AFTER `BANQUE`, ADD PRIMARY KEY (`id_reg`);
 ALTER TABLE `fic_reglem3` ADD `crmid` INT(20) 
 NOT NULL AFTER `id_reg`;
3//

cette 75080 n existe pas