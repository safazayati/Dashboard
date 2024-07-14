window.addEventListener('DOMContentLoaded', () => {
  let autoPrises = 0;

  // Charger les données si elles existent lors du chargement de la page
  if (localStorage.getItem('autoris')) {
    const saved = JSON.parse(localStorage.getItem('autoris'));
    autoPrises = saved.length;

    // Ajouter les absences enregistrées au tableau
    const table = document.getElementById('autoris');
    for (const auto of saved) {
      const row = table.insertRow(-1);
      const cell1 = row.insertCell(0);
      const cell2 = row.insertCell(1);
      const cell3 = row.insertCell(2);
      const dateDebut = auto.date;
      const heure = auto.hour;
      cell1.textContent = dateDebut;
      cell2.textContent = heure;
      cell3.textContent = auto.absent;
    }

    // Mettre à jour les valeurs affichées
    document.getElementById('autoPrises').textContent = parseInt(autoPrises, 10);
  }
});

function ajouterAbsence() {
  const dateDebut = new Date().toLocaleDateString();
  const heure = prompt('Veuillez saisir heure :');
  const absent = prompt('Veuillez saisir le nom de la personne absente :');

  if (heure && absent) {
    const table = document.getElementById('autoris');
    const row = table.insertRow(-1);
    const cell1 = row.insertCell(0);
    const cell2 = row.insertCell(1);
    const cell3 = row.insertCell(2);
    cell1.textContent = dateDebut;
    cell2.textContent = heure;
    cell3.textContent = absent;

    autoPrises++;

    document.getElementById('autoPrises').textContent = autoPrises;

    // Enregistrer les données dans le stockage local
    const saved = localStorage.getItem('autoris') ? JSON.parse(localStorage.getItem('autoris')) : [];
    saved.push({ date: dateDebut});
    localStorage.setItem('autoris', JSON.stringify(saved));
  }
}

function reinitialiser() {
  // Réinitialiser le tableau et les valeurs
  const table = document.getElementById('autoris');
  while (table.rows.length > 1) {
    table.deleteRow(1);
  }
  autoPrises = 0;
  document.getElementById('autoPrises').textContent = autoPrises;

  // Supprimer les données du stockage local
  localStorage.removeItem('autoris');
}
