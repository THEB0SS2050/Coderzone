let comptadorEncerts = localStorage.getItem('comptadorEncerts') || 0;
let preguntesRespostes = {1: 0, 2: 0, 3: 0, 4: 0, 5: 0, 6: 0, 7: 0, 8: 0, 9: 0, 10: 0, 11: 0, 12: 0, 13: 0, 14: 0, 15: 0, 16: 0, 17: 0, 18: 0, 19: 0, 20: 0, 21: 0, 22: 0, 23: 0, 24: 0, 25: 0, 26: 0, 27: 0, 28: 0, 29: 0, 30: 0, 31: 0};

function mostrarResposta(numeroPregunta) {
    let respostaInput = document.getElementById("respostaInput" + numeroPregunta).value;
    let respostaCorrecta = document.getElementById("respostaCorrecta" + numeroPregunta).value;
    let respostaDiv = document.getElementById("resposta" + numeroPregunta);

    if (preguntesRespostes[numeroPregunta] === 1) {
        respostaDiv.textContent = "Ja has respongut aquesta pregunta correctament";
        respostaDiv.style.color = "blue";
    } else {
        if (respostaInput === respostaCorrecta) {
            respostaDiv.textContent = "Resposta correcta.";
            respostaDiv.style.color = "green";
            comptadorEncerts++;
            preguntesRespostes[numeroPregunta] = 1;
            actualitzarComptador();
            // Guardar el contador actualizado en el almacenamiento local
            localStorage.setItem('comptadorEncerts', comptadorEncerts);
        } else {
            respostaDiv.textContent = "Resposta incorrecta. La resposta correcta es: " + respostaCorrecta;
            respostaDiv.style.color = "red";
        }
    }
}

function actualitzarComptador() {
    let comptadorDiv = document.getElementById("comptador");
    comptadorDiv.textContent = comptadorEncerts;
}

document.getElementById("comptador").innerHTML = comptadorEncerts;
