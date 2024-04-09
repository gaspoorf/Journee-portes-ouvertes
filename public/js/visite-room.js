document.addEventListener('DOMContentLoaded', function () {
    const buttonsVisiterPiece = document.querySelectorAll('.btn-visiter-pièce');

    buttonsVisiterPiece.forEach(button => {
        button.addEventListener('click', function () {
            const salleId = this.getAttribute('data-salle');

            // Récupérer le jeton CSRF à partir de la balise meta
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Envoyer une requête AJAX au serveur pour enregistrer la visite
            fetch('/visiter-piece/' + salleId, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken // Utilisation du jeton CSRF récupéré
                },
                body: JSON.stringify({
                    salle_id: salleId
                })
            })
            .then(response => response.json())
            .then(data => {
                // Afficher un message ou effectuer une action en fonction de la réponse
                console.log(data);
            })
            .catch(error => {
                console.error('Erreur lors de la requête :', error);
            });
        });
    });
});
