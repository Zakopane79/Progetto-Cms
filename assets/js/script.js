// Esempio di script per migliorare l'interattività della pagina

// Attiva i tooltip di Bootstrap
// $(document).ready(function () {
//     $('[data-toggle="tooltip"]').tooltip();
// });

// Funzione per gestire il menu a discesa
// $('.dropdown-toggle').dropdown();

// Esempio di funzione per la ricerca
document.querySelector('form').addEventListener('submit', function (e) {
    e.preventDefault();
    const query = document.querySelector('input[type="search"]').value;
    alert('Ricerca per: ' + query);
});

// Aggiungi altre funzionalità JavaScript qui
