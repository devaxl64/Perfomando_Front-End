
function carregar() {
    var msg = window.document.getElementById('msg');
    var img = window.document.getElementById('img')
    var data = new Date();
    var hora = data.getHours();
    // var hora = 13;

    msg.innerHTML = `<p>Agora são ${hora} horas.</p>`;

    if (hora >= 0 && hora < 12) {
        img.src = 'images/dia-rua-300x300.jpg';
        msg.innerHTML += '<p>Bom dia!</p>';
        window.document.body.style.background = '#E0E0DF';
    } else if (hora >= 12 && hora <= 18) {
        img.src = 'images/tarde-predios-300x300.jpg';
        msg.innerHTML += '<p>Boa tarde!</p>';
        window.document.body.style.background = '#FBD19C';
    } else {
        img.src = 'images/noite-rua-300x300.jpg';
        msg.innerHTML += '<p>Boa noite!</p>';
        window.document.body.style.background = '#21131B';
    }
}