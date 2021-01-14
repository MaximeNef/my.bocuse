let boutonarriver = document.getElementById('boutonArriver');
boutonarriver.addEventListener('click', e => {
    fetch('action.php?type=start')
        .then(res => res.text())
        .then(text => {
        if (text == 'oke') {
            alert("pointage de l'heure d'arrivée pour aujourd'hui réussi");
        }
        else if (text=='pointé'){
            alert("vous avez déjà pointé l'heure d'arrivée aujourd'hui");
        }
    })
})

let boutondepart = document.getElementById('boutonDepart');
boutondepart.addEventListener('click', e => {
    fetch('action.php?type=stop')
        .then(res => res.text())
        .then(text => {
        if (text == 'okay') {
            alert("pointage de l'heure de départ pour aujourd'hui réussi");
        }
        else if (text=='pointées'){
            alert("vous avez déjà pointé l'heure de départ aujourd'hui");
        }
    })
})