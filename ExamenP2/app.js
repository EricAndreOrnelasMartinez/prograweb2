const from = document.getElementById('info')
const aux = document.getElementById('aux')
let  ver = null
const table = document.getElementById('table')

from.addEventListener('submit', e =>{
    e.preventDefault()
    let data = new FormData(from)
    fetch('./backend.php', {
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(back =>{
        if(back == "1"){
            aux.innerHTML = `
            <button id="ver">Mostrar resultados</button>
            `
            ver = document.getElementById('ver')
            addlistener()
        }
    })
})

function addlistener(){
    if(ver != null){
        ver.addEventListener('click', e=>{
            e.preventDefault()
            let data = new FormData(from)
            fetch('./consulta.php', {
                method: 'POST',
                body: data
            })
            .then(res = res.json())
            .then(back =>{
                console.log(back)
            })
        })
    }
}

