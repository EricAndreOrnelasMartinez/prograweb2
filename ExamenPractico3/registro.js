const form = document.getElementById('info')
const h3 = document.getElementById('res')
form.addEventListener('submit', e=>{
    e.preventDefault()
    let data = new FormData(form)
    fetch('registro.php',{
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(back =>{
        if(back == '2'){
            h3.innerHTML = 'Correo existente'
            h3.style = 'background-color: red'
        }else if(back == 1){
            window.location.assign('./index.html')
        }else{
            h3.innerHTML = 'ERROR 500'
            h3.style = 'background-color: red'           
        }
    })
})