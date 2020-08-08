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
    }else{
        alert('Senha incorreta')
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