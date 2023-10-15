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
            table.innerHTML = `<h3 style="background-color: red">Es necesario contestar el formulario</h3>`
        }else{
            table.innerHTML = `
            <th>Pregunta</th>
            <th>Respuesta</th>
            `
            output = ``
            for(i in back){
                output += `
                <tr>
                    <td>Pregunta 1</td>
                    <td>${back['pre' + 1]}</td>
                </tr>
                <tr>
                    <td>Pregunta 2</td>
                    <td>${back['pre' + 2]}</td>
                </tr>
                 <tr>
                    <td>Pregunta 3</td>
                    <td>${back['pre' + 3]}</td>
                </tr>
                <tr>
                    <td>Pregunta 4</td>
                    <td>${back['pre' + 4]}</td>
                </tr>
                <tr>
                    <td>Pregunta 5</td>
                    <td>${back['pre' + 5]}</td>
                </tr>
                <tr>
                    <td>Pregunta 6</td>
                    <td>${back['pre' + 6]}</td>
                </tr>
                <tr>
                    <td>Pregunta 7</td>
                    <td>${back['pre' + 7]}</td>
                </tr>
                <tr>
                    <td>Pregunta 8</td>
                    <td>${back['pre' + 8]}</td>
                </tr>
                <tr>
                    <td>Pregunta 9</td>
                    <td>${back['pre' + 9]}</td>
                </tr>
                <tr>
                    <td>Pregunta 10</td>
                    <td>${back['pre' + 10]}</td>
                </tr>
                <tr>
                    <td>Pregunta 11</td>
                    <td>${back['pre' + 11]}</td>
                </tr>
                <tr>
                    <td>Pregunta 12</td>
                    <td>${back['pre' + 12]}</td>
                </tr>
                <tr>
                    <td>Resultado</td>
                    <td>${back['resultado']}</td>
                </tr>          
                <tr>
                    <td>ID de encuesta</td>
                    <td>${back['id']}</td>
                </tr>      
                `
            }
        }
    })
})
