const form = document.getElementById('info')
const tabla = document.getElementById('tabla')
const modificar = document.getElementById('modificar')
const res = document.getElementById('res')

form.addEventListener('submit', e => {
    e.preventDefault()
    let data = new FormData(form)
    fetch('./backend.php',{
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(back =>{
        console.log(back)
        if(form['op'].value == "Consultar"){
            tabla.innerHTML = `
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <tr>
            <td>${back['id']}</td>
            <td>${back['firstname']}</td>
            <td>${back['lastname']}</td>
            `
        }else if(form['op'].value == "Modificar"){
            tabla.innerHTML = ""
            modificar.innerHTML = `
            <input type="hidden" name="id" value="${back['id']}">
            <input type="text" name="fname" value="${back['firstname']}">
            <input type="text" name="lastname" value="${back['lastname']}">
            <input type="text" name="email" value="${back['email']}">
            <input type="submit" value="modificar">
            `
        }else{

        }
    })
})

modificar.addEventListener('submit', e =>{
    e.preventDefault()
    let data = new FormData(modificar)
    fetch("./modificar.php", {
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(back =>{
        console.log(back)
        if(back == "1"){
            res.innerHTML = "Modificado!!!"
            res.style = "backgrund-color: green"
        }else{
            res.innerHTML = "ERROR 500"
            res.style = "background-color: red"
        }
    })
})