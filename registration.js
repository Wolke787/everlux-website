document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Standardformularverhalten unterbinden
  
    // Formulardaten auslesen
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
  
    // Daten im localStorage speichern (nur zur Simulation)
    localStorage.setItem('userName', name);
    localStorage.setItem('userEmail', email);
    localStorage.setItem('userPassword', password);
  
    // Formular ausblenden und Erfolgsmeldung anzeigen
    document.getElementById('registrationForm').style.display = 'none';
    document.getElementById('successMessage').style.display = 'block';
  });
  