function vergleichEmails() {
    var email1 = document.getElementById('email').value;
    var email2 = document.getElementById('emailwdh').value;

    if (email1 === email2) {
        console.log('E-Mail stimmt überein');

    } else {
        console.log('E-Mail stimmen nicht überein');
        alert('Die E-Mail-Adressen stimmen nicht überein.');
    }
}