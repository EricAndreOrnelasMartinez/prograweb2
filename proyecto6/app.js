const form = document.getElementById('info')
const h3 = document.getElementById('res')

form.addEventListener('submit', e =>{
    e.preventDefault()
    let data = new FormData(form)
    fetch('./backend.php', {
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(back =>{
        console.log(back)
        if(back == "0"){
            h3.innerHTML = "Contraseña incorrecta"
            h3.style = "background-color: red"
        }else if(back == "2"){
            h3.innerHTML = "Contraseña incorrecta"
            h3.style = "background-color: red"  
        }else{
            window.location.assign("./inicio.php")
        }
    })
})