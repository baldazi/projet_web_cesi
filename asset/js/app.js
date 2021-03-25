$(()=>{
  var dataSecteur = ["Administration, fonction publique","Agroalimentaire","Artisanat d'art","Associations","Banques, assurances, services financiers","Chimie, plastique, conditionnement","Commerce de détail, grande distribution","Communication, marketing, information","Construction, bâtiment, travaux publics","Culture, sports, loisirs","Energie","Enseignement, formation","Environnement, récupération, tri, recyclage, traitement des déchets, matériaux, de l'eau","Equipement, matériel pour activités professionnelles","Fabrication, commerce de gros d'articles destinés à la vente","Gestion, administration des entreprises","Hôtellerie, restauration, tourisme","Immobilier","Industrie textile","Informatique","Ingénieurs d'études et de recherche, chercheurs","Logistique, transports","Matériel électrique, électronique, optique","Mécanique, métallurgie","Minerais, minéraux, sidérurgie","Professions juridiques","Santé, action sociale","Services aux particuliers, collectivités, entreprises"];

  $('.logo').tooltip();
  $("#main-search").autocomplete({
    source:dataSecteur
  });

  $("#creer-entreprise-form").hide();
  $("#creer-stage-form").hide();
  $("#creer-pilote-del-etudiant-form").hide();
  /*****************************afficher/masquer******************/
  $("#pilote-id-1").click(                                     /**/
    function(){                                                /**/
      $("#creer-entreprise-form").hide();                      /**/
      $("#creer-stage-form").hide();                           /**/
      $("#creer-pilote-del-etudiant-form").show();             /**/
    }                                                          /**/
  );                                                          /**/

  $("#etudiant-id-1").click(                                     /**/
    function(){                                                /**/
      $("#creer-entreprise-form").hide();                      /**/
      $("#creer-stage-form").hide();                           /**/
      $("#creer-pilote-del-etudiant-form").show();             /**/
    }                                                          /**/
  );                                                          /**/

  $("#del-id-1").click(                                     /**/
    function(){                                                /**/
      $("#creer-entreprise-form").hide();                      /**/
      $("#creer-stage-form").hide();                           /**/
      $("#creer-pilote-del-etudiant-form").show();             /**/
    }                                                          /**/
  );                                                          /**/

  $("#entreprise-id-1").click(                                     /**/
    function(){                                                /**/
      $("#creer-entreprise-form").show();                      /**/
      $("#creer-stage-form").hide();                           /**/
      $("#creer-pilote-del-etudiant-form").hide();             /**/
    }                                                          /**/
  );                                                          /**/

  $("#stage-id-1").click(                                     /**/
    function(){                                                /**/
      $("#creer-entreprise-form").hide();                      /**/
      $("#creer-stage-form").show();                           /**/
      $("#creer-pilote-del-etudiant-form").hide();             /**/
    }                                                          /**/
  );                                                          /**/


  /*********************************************************************/
  $(".cms-tabs").tabs({
    collapsible:true
  });
  $(".datepicker").datepicker();
  $("#secteur-activ,#main-search").autocomplete({
    source:dataSecteur
  });
    //$("#creer-entreprise-form").hide;
});
/*if($("#pilote-id-1").attr('checked', true);){$("img").toggle();}
if($("#del-id-1").attr('checked', true);)
if($("#stage-id-1").attr('checked', true);)
if($("#entreprise-id-1").attr('checked', true);){$("#creer-entreprise-form").toggle();}
if($("#etudiant-id-1").attr('checked', true);)*/
