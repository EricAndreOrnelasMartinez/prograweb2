const form = document.getElementById('info')
const h3 = document.getElementById('res')
form.addEventListener('submit', e=>{
    e.preventDefault()
    let data = new FormData(form)
    fetch('./login.php', {
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(back =>{
        if(back == '2'){

        }else{
            h3.innerHTML = 'Usuario o contraseña incorrectos'
            h3.style = 'background-color: red'
            h3.style = 'color: withe'
        }
    })
})