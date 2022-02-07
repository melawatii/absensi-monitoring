// Navbar Menu
const nav = document.getElementById('nav');
const menu = document.getElementById('menu');

menu.addEventListener('click', () => {
    nav.classList.toggle('show');
})

// Contact Form
const scriptURL = 'https://script.google.com/macros/s/AKfycbx0uO1mGeCitWeYgS7OgzSNOHgYV7dh9cZBFevhNT-PSLP8PmDAN8GTS2ef7HR6-kpOxQ/exec'
const form = document.forms['absen-monitoring-contact-form']
const btnSend = document.querySelector('.btn.read.send')
const btnLoad = document.querySelector('.btn.read.loading')

form.addEventListener('submit', e => {
    e.preventDefault();
    btnLoad.classList.toggle('none');
    btnSend.classList.toggle('none');
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then((response) => {
            btnLoad.classList.toggle('none');
            btnSend.classList.toggle('none');
            alert('Terimakasih! pesan Anda telah terkirim.');
        })
        .catch(error => alert('Ups! Pesan gagal terkirim, silahkan coba lagi.'));
    form.reset();
})

//  Show-Hide Password
function executePassword() {
    var x = document.getElementById('password');
    var y = document.getElementById('show');
    var z = document.getElementById('hide');

    if (x.type === 'password') {
        x.type = "text";
        y.style.display = "block";
        z.style.display = "none";
    }
    else {
        x.type = "password";
        y.style.display = "none";
        z.style.display = "block";
    }
}
