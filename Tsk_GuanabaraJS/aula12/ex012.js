// Condição aninhada (if dentro do outro)

var agora = new Date();

var hora = agora.getHours();
// var hora = 18;

console.log(`Agora são exatamente ${hora} horas.`);

if (hora >= 0 && hora <= 4) {
    console.log('Bons sonhos!');
} else if (hora > 4 && hora < 12) {
    console.log('Bom dia!');
} else if (hora >= 12 && hora < 18) {
    console.log('Boa tarde!');
} else {
    console.log('Boa noite!');
}