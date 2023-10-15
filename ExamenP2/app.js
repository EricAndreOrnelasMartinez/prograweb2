const from = document.getElementById('info')
const aux = document.getElementById('aux')
const  ver = document.getElementById('con')
const table = document.getElementById('table')

from.addEventListener('submit', e =>{
    e.preventDefault()
    let data = new FormData(from)
    fetch('./backend.php', {
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(back =>{
        if(back == "1"){
            aux.innerHTML = "Ya pude consultar sus resultados!"
            aux.style = "color: withe; background-color: green;"
        }
    })
})

ver.addEventListener('click', e=>{
    e.preventDefault()
    let data = new FormData(from)
    fetch('./consulta.php', {
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(back =>{
        if(back == 2){
            table.innerHTML = `<h3 style="background-color: red; position: sticky; font-size:20px;">Es necesario contestar el formulario</h3>`
            alert('primero debes contestar el test')
        }else{
            console.log(back)
            table.innerHTML = `
            <thead>
            <tr>
                <td>No # Pregunta</td>
                <td>Respuesta</td>
            </tr>
            </thead> 
            `
            output = ``
            for(i in back){
                output += `
                <tr>
                    <td>Pregunta 1</td>
                    <td>${back[i].pre1}</td>
                </tr>
                <tr>
                    <td>Pregunta 2</td>
                    <td>${back[i].pre2}</td>
                </tr>
                 <tr>
                    <td>Pregunta 3</td>
                    <td>${back[i].pre3}</td>
                </tr>
                <tr>
                    <td>Pregunta 4</td>
                    <td>${back[i].pre4}</td>
                </tr>
                <tr>
                    <td>Pregunta 5</td>
                    <td>${back[i].pre5}</td>
                </tr>
                <tr>
                    <td>Pregunta 6</td>
                    <td>${back[i].pre6}</td>
                </tr>
                <tr>
                    <td>Pregunta 7</td>
                    <td>${back[i].pre7}</td>
                </tr>
                <tr>
                    <td>Pregunta 8</td>
                    <td>${back[i].pre8}</td>
                </tr>
                <tr>
                    <td>Pregunta 9</td>
                    <td>${back[i].pre9}</td>
                </tr>
                <tr>
                    <td>Pregunta 10</td>
                    <td>${back[i].pre10}</td>
                </tr>
                <tr>
                    <td>Pregunta 11</td>
                    <td>${back[i].pre11}</td>
                </tr>
                <tr>
                    <td>Pregunta 12</td>
                    <td>${back[i].pre12}</td>
                </tr>
                <tr>
                    <td>Resultado</td>
                    <td>${back[i].resultado}</td>
                </tr>          
                <tr>
                    <td>ID de encuesta</td>
                    <td>${back[i].id}</td>
                </tr>      
                `
            }
            table.innerHTML += output
        }
    })
})
