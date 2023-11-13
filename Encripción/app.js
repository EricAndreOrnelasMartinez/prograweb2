const form = document.getElementById('info');

form.addEventListener('submit', e=>{
    e.preventDefault()
    let data = new FormData(form)
    fetch('./backend.php', {
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(back =>{
        console.log(back)
        /*
        if(back == '1'){
            console.log('Registrado');
        }else{
            console.log('error 500')
        }*/
    })
})