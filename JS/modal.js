//                  MODAL CONNEXION

// je séléctionne les éléments du DOM
let modalSelector = document.querySelector("#modal");
let croixSelector = document.querySelector(".croix");
let boutonConnexion = document.querySelector(".boutonConnexion");
let back = document.querySelector("#back");

// je fais un évènement au clic sur le bouton connexion
boutonConnexion.addEventListener("click", function () {
  //j'enleve la class 'd-none' de la modal
  modalSelector.classList.remove("d-none");
  //j'ajoute la class 'modal_template' et "modalBack" de la modal
  modalSelector.classList.add("modal-template");
  back.classList.add("modalBack");
});

// je fais un évènement au clic sur la croix
croixSelector.addEventListener("click", function () {
  //j'ajoute la class 'd-none' de la modal
  modalSelector.classList.add("d-none");
  //j'enlève la class 'modal_template' et "modalBack" de la modal
  back.classList.remove("modalBack");
  modalSelector.classList.remove("modal-template");
});

//                  MODAL INSCRIPTION

// je séléctionne les éléments du DOM
let boutonInscription = document.querySelector(".boutonInscription");
let modalInscSelector = document.querySelector("#modalInsc");
let croixSelectorInsc = document.querySelector(".croixInsc");

// je fais un évènement au clic sur l'ancre "crée un compte"
boutonInscription.addEventListener("click", function () {
  //j'enleve la class 'd-noneInsc' de la modal
  modalInscSelector.classList.remove("d-noneInsc");
  //j'ajoute la class 'modal_templateInsc' et "modalBackInsc" de la modal
  modalInscSelector.classList.add("modal-templateInsc");
  back.classList.add("modalBackInsc");
});

// je fais un évènement au clic sur la croix
croixSelectorInsc.addEventListener("click", function () {
  //j'ajoute la class 'd-noneInsc' de la modal
  modalInscSelector.classList.add("d-noneInsc");
  //j'enlève la class 'modal_templateInsc' et "modalBackInsc" de la modal
  back.classList.remove("modalBackInsc");
  modalInscSelector.classList.remove("modal-templateInsc");
  //j'enleve les éléments de ma modal connexion 
  modalSelector.classList.add("d-none");
  back.classList.remove("modalBack");
  modalSelector.classList.remove("modal-template");
});

