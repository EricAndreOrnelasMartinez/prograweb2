const form = document.getElementById('info')
const tabla = document.getElementById('tabla')

form.addEventListener('submit', e =>{
    e.preventDefault()
    let data = new FormData(form)
    fetch('./backend.php',{
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(back =>{
        console.log(back)
        if(back != "Eliminado" && back != "ID no encontrado"){
            tabla.innerHTML = `
            <th>id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <tr>
            <td>${back['id']}</td>
            <td>${back['firstname']}</td>
            <td>${back['lastname']}</td>
            </tr>`
        }else{
            tabla.innerHTML = back;
        }
    })
})