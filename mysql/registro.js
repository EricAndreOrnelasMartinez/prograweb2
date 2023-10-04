const form = document.getElementById('info')
const h3 = document.getElementById('res')

form.addEventListener('submit', e => {
    e.preventDefault()
    let data = new FormData(form)
    fetch("./registro.php",{
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(back =>{
        if(back == 1){
           h3.innerHTML = "Registrado con éxiti!!"
           h3.style = "background-color: green;" 
        }else{
            h3.innerHTML = "Algo salió mal error 500"
            h3.style = "background-color: red;" 
        }
    })
})