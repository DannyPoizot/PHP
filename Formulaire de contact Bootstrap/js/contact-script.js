$(document).ready(function(){

  $("#valid").validate({
    rules: {
      nom: {
        "required": true,
        "minlength": 2,
      },
      prenom: {
        "required": true,
        "minlength": 2,
      },
      mail: {
        "required": true,
        "email": true,
      },
      password: {
        "required": true,
        "minlength": 2,
        "maxlength": 8,
      },
      confirm: {
        "required": true,
        "minlength": 2,
        "maxlength": 8,
        "equalTo": "#password",
      },
      choice: {
        "required": true,
      },
      message: {
        "required": true,
        "minlength": 10,
        "maxlength": 200,
      },
    },
    messages:{
      nom:{
        required:"Ce champ est obligatoire !",
        minlength:"2 caractères minimum !",
      },
      prenom:{
        required:"Ce champ est obligatoire !",
        minlength:"2 caractères minimum !",
      },
      mail: {
        required: "Ce champ est obligatoire !",
        email: "Veuillez entrer un mail valide !",
      },
      password: {
        required: "Veuillez définir un mot de passe !",
        minlength: "Le mot de passe doit faire 2 caractères minimum",
        maxlength: "Le mot ne doit pas excéder 8 caractères",
      },
      confirm: {
        required: "Veuillez confirmer votre mot de passe !",
        equalTo: "Les mots de passe doivent être identiques !",
      },
      choice: {
        required: "Veuillez choisir un sujet !",
      },
      message: {
        required: "Précisez votre demande !",
        minlength: "10 caractères minimum",
        maxlength: "200 caractères maximum",
      },
    },
  });

  

});
