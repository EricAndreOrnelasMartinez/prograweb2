const info = document.getElementById('info')
const h3 = document.getElementById('res')

info.addEventListener('submit', e=>{
    e.preventDefault()
    let data = new FormData(info)
    fetch('./backend.php', {
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(back =>{
        if(back == '1'){
            h3.innerHTML = 'Correcto!'
            h3.style = 'color: withe; background-color: green'
        }else{
            h3.innerHTML = 'Incorrecto!'
            h3.style = 'color: withe; background-color: red'          
        }
    })
})