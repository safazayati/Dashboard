window.addEventListener('DOMContentLoaded', () => {
  let absencesPrises = 0;
  let soldeTotal = 25;
  const utilisateurConnecte = 'email'; // Remplacez 'X' par l'identifiant de l'utilisateur connecté

  // Charger les données si elles existent lors du chargement de la page
  if (localStorage.getItem('absences')) {
    const savedAbsences = JSON.parse(localStorage.getItem('absences'));
    const absencesUtilisateur = savedAbsences.filter(absence => absence.utilisateur === utilisateurConnecte);
    absencesPrises = absencesUtilisateur.length;
    soldeTotal = 25 - absencesPrises;

    // Ajouter les absences enregistrées au tableau
    const table = document.getElementById('absences');
    for (const absence of absencesUtilisateur) {
      const row = table.insertRow(-1);
      const cell1 = row.insertCell(0);
      const cell2 = row.insertCell(1);
      const cell3 = row.insertCell(2);
      const [dateDebut, dateFin] = absence.date.split(' - ');
      cell1.textContent = dateDebut;
      cell2.textContent = dateFin;
      cell3.textContent = absence.absent;
    }

    // Mettre à jour les valeurs affichées
    document.getElementById('absencesPrises').textContent = absencesPrises.toString();
    document.getElementById('soldeTotal').textContent = soldeTotal.toString();
  }
});

function ajouterAbsence() {
  const utilisateurConnecte = 'email'; // Remplacez 'X' par l'identifiant de l'utilisateur connecté
  const dateDebut = new Date().toLocaleDateString();
  const dateFin = prompt('Veuillez saisir la date de fin (Format : JJ/MM/AAAA) :');
  const absent = prompt('Veuillez saisir le nom de la personne absente :');

  if (dateFin && absent) {
    const table = document.getElementById('absences');
    const row = table.insertRow(-1);
    const cell1 = row.insertCell(0);
    const cell2 = row.insertCell(1);
    const cell3 = row.insertCell(2);
    cell1.textContent = dateDebut;
    cell2.textContent = dateFin;
    cell3.textContent = absent;

    let absencesPrises = parseInt(document.getElementById('absencesPrises').textContent, 10);
    let soldeTotal = parseInt(document.getElementById('soldeTotal').textContent, 10);
    absencesPrises++;
    soldeTotal = 25 - absencesPrises;
    document.getElementById('absencesPrises').textContent = absencesPrises.toString();
    document.getElementById('soldeTotal').textContent = soldeTotal.toString();

    // Enregistrer les données dans le stockage local
    const savedAbsences = localStorage.getItem('absences')
      ? JSON.parse(localStorage.getItem('absences'))
      : [];
    savedAbsences.push({ date: dateDebut + ' - ' + dateFin, absent, utilisateur: utilisateurConnecte });
    localStorage.setItem('absences', JSON.stringify(savedAbsences));
  }
}

function reinitialiser() {
  // Réinitialiser le tableau et les valeurs
  const table = document.getElementById('absences');
  while (table.rows.length > 1) {
    table.deleteRow(1);
  }
  document.getElementById('absencesPrises').textContent = '0';
  document.getElementById('soldeTotal').textContent = '25';

  // Supprimer les données du stockage local
  localStorage.removeItem('absences');
}
