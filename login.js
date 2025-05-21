document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Standardformularverhalten unterbinden
  
    // Eingabewerte auslesen
    const email = document.getElementById('loginEmail').value;
    const password = document.getElementById('loginPassword').value;
  
    // Gespeicherte Benutzerdaten aus dem localStorage abrufen
    const storedEmail = localStorage.getItem('userEmail');
    const storedPassword = localStorage.getItem('userPassword');
  
    // Eingaben mit gespeicherten Daten vergleichen
    if (email === storedEmail && password === storedPassword) {
      // Bei erfolgreichem Login weiterleiten zur Startseite
      window.location.href = 'index.html';
    } else {
      document.getElementById('errorMessage').style.display = 'block';
    }
  });
  