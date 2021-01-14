
// générer les cards
// fonction qui créer les cards
function createCard(){
    let recipeList = document.getElementById("recipeList")

    let divCard = document.createElement("div")
    divCard.className = "card"
    recipeList.appendChild(divCard)

    let cardBody= document.createElement("div")
    cardBody.className = "card-body"
    divCard.appendChild(cardBody)

    let cardTitle = document.createElement("h5")
    cardTitle.className = "card-title"
    cardTitle.textContent = "Title of recipe"
    cardBody.appendChild(cardTitle)


    let byWho = document.createElement("h6")
    byWho.className = "card-subtitle mb-2 text-muted"
    byWho.textContent = "Recipe creator"
    cardBody.appendChild(byWho)

    let addDate = document.createElement("h7")
    addDate.className = "card-subtitle mb-2 text-muted"
    addDate.textContent = "00.00.0000"
    cardBody.appendChild(addDate)

    let cardText= document.createElement("p")
    cardText.className = "card-text"
    cardText.textContent = "Some quick example text to build on the card title and make up the bulk of card s content."
    cardBody.appendChild(cardText)

    let stars = document.createElement("div")
    stars.className = "col-lg-12 grandBlocnote"
    cardBody.appendChild(stars)

    //créer les étoiles jusque 5
    for (let i=1; i<6; i++){
        let star = document.createElement("div")
        star.className = "note"+ i
        star.dataCount = i
        star.textContent = "★"
        stars.appendChild(star)
    }
}

createCard();

// event pour les boutons arrivé
// const buttons = document.querySelectorAll(".buttons");

// let buttonclick = false;

// .addEventListener("click",){
//     let = document.createElement("p")
//     .className = ""
//     .textContent = ""
// }


let boutonarriver = document.getElementById('boutonArriver');
boutonarriver.addEventListener('click', e => {
    fetch('action.php?type=start')
        .then(res => res.text())
        .then(text => {

        if (text == 'pointage-matin') {
            alert("Le pointage de l'heure à laquelle vous avez commencé pour aujourd'hui est réussi!");
        }
        else if (text=='non-pointage-matin'){
            alert("Vous avez déjà pointé l'heure à laquelle vous avez commencé pour aujourd'hui!");

        }
    })
})

let boutondepart = document.getElementById('boutonDepart');
boutondepart.addEventListener('click', e => {
    fetch('action.php?type=stop')
        .then(res => res.text())
        .then(text => {

        if (text == 'pointage-soir') {
            alert("Le pointage de l'heure à laquelle vous avez terminé pour aujourd'hui est réussi!");
        }
        else if (text=='pointage-soir-déjà-fait'){
            alert("Vous avez déjà pointé l'heure à laquelle vous avez terminé pour aujourd'hui!");
            }
        else if (text == 'pointage-matin-pas-encore-fait') {
            alert("Vous n'avez pas encore pointé l'heure à laquelle vous avez commencé la journée!")
            }
    })
})