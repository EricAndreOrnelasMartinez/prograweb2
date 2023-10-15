const from = document.getElementById('info')
const aux = document.getElementById('aux')
const  ver = document.getElementById('con')
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
            aux.innerHTML = "Ya pude consultar sus resultados!"
            aux.style = "color: withe; background-color: green;"
        }
    })
})

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
