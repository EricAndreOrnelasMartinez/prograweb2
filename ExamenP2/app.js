const from = document.getElementById('info')

from.addEventListener('submit', e =>{
    e.preventDefault()
    let data = new FormData(from)
    fetch('./backend.php', {
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(back =>{
        console.log(back)
    })
})