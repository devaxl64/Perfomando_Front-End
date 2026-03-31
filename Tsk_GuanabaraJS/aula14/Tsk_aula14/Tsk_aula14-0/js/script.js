function contar() {
    var ini = window.document.getElementById('txti');
    var fim = window.document.getElementById('txtf');
    var passo = window.document.getElementById('txtp');
    var res = window.document.getElementById('res');
    
    if (ini.value.length == 0 || fim.value.length == 0 || passo.value.length == 0) {
        window.alert('[ERRO] Faltam dados');
        res.innerHTML = 'Não é possível fazer a contagem...'
    } else {
        res.innerHTML = 'Contando: <br>';
        var i = Number.parseInt(ini.value);
        var f = Number.parseInt(fim.value);
        var p = Number.parseInt(passo.value);

        if (p <= 0) {
            window.alert('Passo inválido! O passo voltou à 1!');
            p = 1;
        }

        if (i < f) { // crescente
            res.innerHTML += `\u{1F449}`;
            for (i;i<=f;i+=p) {
                res.innerHTML += `${i} \u{1F449}`;
            }
        } else { // regressiva
            res.innerHTML += `\u{1F449}`;
            for(i;i>=f;i-=p) {
                res.innerHTML += `${i} \u{1F449}`
            }
        }
        res.innerHTML += `\u{1F3c1}`;
    }
}