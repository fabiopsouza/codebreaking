/**
 * Carrega os capítulos de acordo com o progresso salvo do usuário no localStorage
 */
function loadProgressUser(){
    const progress = localStorage.getItem('currentChapter')
        ? localStorage.getItem('currentChapter')
        : 1

    for(i = 2; i <= progress; i++){
        _releaseChapter(i)
    }
}

/**
 * Compara a senha inserida pelo usuario, com a senha do capítulo
 * @param {Number} numberChapter 
 * @param {HTMLElement} buttonElement Elemento do botão na página do capítulo que contém o enigma
 */
async function checkPasswordChapter(numberChapter, buttonElement){
    const userPasswordChapter = buttonElement.parentNode.parentNode.childNodes[1].value
    const chapterData = await _getDataOfAChapter(numberChapter)
    const passwordChapter = chapterData.password.toLowerCase()
    if(passwordChapter === userPasswordChapter){
        _releaseChapter(numberChapter)
        buttonElement.parentNode.parentNode.innerHTML = ""
        _alertResult(true)
        localStorage.setItem('currentChapter', numberChapter)
    }else{
        _alertResult(false)
    }
}

/**
 * Responsável por exibir todo o HTML do capítulo escolhido
 * @param {Number} numberChapter 
 */
function _releaseChapter(numberChapter){
    const xhr = new XMLHttpRequest();
    const main = document.getElementById('main')
    
    xhr.onload = function() {
        if(this.status === 200){
            main.innerHTML += `
                <section id="section-cap${numberChapter}">
                    <div class="container" data-aos="fade-up">
                        ${xhr.responseText}
                    </div>
                </section>
            `
        }else{
            console.log('Erro no servidor :((')
        }
    }

    xhr.open('get', `chapter${numberChapter}.php`)
    xhr.send()
}

/**
 * Pega todos os dados de um capítulo escolhido (referente ao data/chapters.json)
 * @param {Number} numberChapter 
 */
async function _getDataOfAChapter(numberChapter){
    const indexChapter = numberChapter - 1
    let result = {}
    await fetch('src/data/chapters.json')
        .then(response => response.json())
        .then(response => {
            result = response.chapters[indexChapter]
        })
    return result
}

/**
 * Esconder o input de texto e o botão de envio, pertencentes ao puzzle 
 * (Função criada para adicionar futuras animações quando for necessário)
 * @param {HTMLElement} input input group que contém o campo de inserir a senha e o botão de envio
 */
function _hideInputPuzzle(input){
    input.innerHTML = ""
}

/**
 * Avisar o usuário se acertou ou se errou a senha do puzzle
 * @param {Boolean} status true se o usuário inseriu a senha corretamente, false se não
 */
function _alertResult(status){
    const statusPositive = status === true
    const result = statusPositive 
        ? "senha correta, próximo capítulo liberado!"
        : "senha incorreta"
        
    alert(result)
}
