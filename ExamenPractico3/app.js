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
            window.location.assign('./main.php');
        }else if(back == '3'){
            h3.innerHTML = 'Acceso negado, contacta al admin'
            h3.style = 'background-color: red'
        }else{
            h3.innerHTML = 'Usuario o contraseña incorrectos'
            h3.style = 'background-color: red'
        }
    })
})