function verificar() {
    var data = new Date();
    var ano = data.getFullYear();
    var fAno = window.document.getElementById('txtano');

    // var res = window.document.getElementById('res');
    var res = window.document.querySelector('div#res');
    if (fAno.value.length == 0 || Number.parseInt(fAno.value) > ano) {
        window.alert('[ERRO] Verifique os dados inseridos e tente novamente!');
    } else {
        var fsex = window.document.getElementsByName('radsex');
        var idade = ano - Number.parseInt(fAno.value);
        res.innerHTML = `Sua idade: ${idade}`;
        var genero = toString('');
        var img = window.document.createElement('img')
        img.setAttribute('id', 'foto');

        
        if (fsex[0].checked) {
            genero = 'Masculino';
            if (idade >= 0 && idade < 4) {
                // Bebê
                img.setAttribute('src', 'images/h-bebe-2.jpg')
            } else if (idade >= 4 && idade < 9) {
                // Criança
                img.setAttribute('src', 'images/h-crianca-7.jpg')
            } else if (idade >= 9 && idade < 13) {
                // Pré-Aborrecente
                img.setAttribute('src', 'images/h-crianca-12.jpg')
            } else if (idade >= 14 && idade < 18) {
                // Aborrecente
                img.setAttribute('src', 'images/h-jovem-15.jpg')
            } else if (idade >= 18 && idade < 25) {
                // Jovem Adulto
                img.setAttribute('src', 'images/h-jovem-19.jpg')
            } else if (idade >= 25 && idade < 40) {
                // Adulto
                img.setAttribute('src', 'images/h-jovem-25.jpg')
            } else if (idade >= 40 && idade < 50) {
                // Adulto Experiente
                img.setAttribute('src', 'images/h-homem-44.jpg')
            } else if (idade >= 50 && idade < 65) {
                // Senhor
                img.setAttribute('src', 'images/h-senhor-60.jpg')
            } else if (idade >= 65) {
                // Idoso
                img.setAttribute('src', 'images/h-senhor-80.jpg')
            }
        } else if (fsex[1].checked) {
            genero = 'Feminino';
            if (idade >= 0 && idade < 4) {
                // Bebê
                img.setAttribute('src', 'images/f-bebe-2.jpg')
            } else if (idade >= 4 && idade < 9) {
                // Criança
                img.setAttribute('src', 'images/f-crianca-7.jpg')
            } else if (idade >= 9 && idade < 13) {
                // Pré-Aborrecente
                img.setAttribute('src', 'images/f-crianca-13.jpg')
            } else if (idade >= 14 && idade < 18) {
                // Aborrecente
                img.setAttribute('src', 'images/f-jovem-17.jpg')
            } else if (idade >= 18 && idade < 25) {
                // Jovem Adulta
                img.setAttribute('src', 'images/f-jovem-19.jpg')
            } else if (idade >= 25 && idade < 40) {
                // Adulta
                img.setAttribute('src', 'images/f-mulher-32.jpg')
            } else if (idade >= 40 && idade < 50) {
                // Adulta Experiente
                img.setAttribute('src', 'images/f-mulher-35.jpg')
            } else if (idade >= 50 && idade < 65) {
                // Senhora
                img.setAttribute('src', 'images/f-senhora-60.jpg')
            } else if (idade >= 65) {
                // Idosa
                img.setAttribute('src', 'images/f-senhora-80.jpg')
            }
        }
        res.innerHTML = `Detectamos uma pessoa de ${idade} anos do sexo ${genero}.`;
        res.appendChild(img);
    }
}