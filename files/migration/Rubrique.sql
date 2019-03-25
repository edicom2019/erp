insert into u_yf_rubriques (rubriquesid,rubrique,code_rubrique)

  SELECT crmid,description,modifiedby
  FROM vtiger_crmentity
  WHERE setype='Rubriques'
  and crmid>399