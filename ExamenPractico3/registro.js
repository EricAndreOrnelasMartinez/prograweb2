const form = document.getElementById('info')

form.addEventListener('submit', e=>{
    e.preventDefault()
    let data = new FormData(form)
    fetch('registro.php',{
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(back =>{
        console.log(back)
    })
})