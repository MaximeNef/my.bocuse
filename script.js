
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
        else if (text =='pointage-soir-déjà-fait'){
            alert("Vous avez déjà pointé l'heure à laquelle vous avez terminé pour aujourd'hui!");
            }
        else if (text == 'pointage-matin-pas-encore-fait') {
            alert("Vous n'avez pas encore pointé l'heure à laquelle vous avez commencé la journée!")
            }
    })
})