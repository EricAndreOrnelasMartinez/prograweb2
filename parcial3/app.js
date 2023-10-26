const form = document.getElementById('info')
let table = document.getElementById('table')

form.addEventListener('submit', e =>{
    e.preventDefault()
    table.innerHTML = "";
    let data = new FormData(form)
    fetch('backend.php', {
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(back =>{
        console.log(back)
        console.log(typeof(back))
        if(back.length){
            let output
            table.innerHTML = `
            <tr>
                <th>ID</th>
                <th>Matricula</th>
                <th>Semestre</th>
                <th>Materia</th>
                <th>Sección</th>
                <th>Periodo</th>
                <th>CFO</th>
                <th>EXT</th>
                <th>REG</th>
                <th>CF</th>
                <th>Creditos</th>
                <th>Status</th>
            </tr>
            `
            for(i in back){
                output += `
                <tr>
                <td>${back[i].id}</td>
                <td>${back[i].matricula}</td>
                <td>${back[i].semestre}</td>
                <td>${back[i].materia}</td>
                <td>${back[i].seccion}</td>
                <td>${back[i].periodo}</td>
                <td>${back[i].cfo}</td>
                <td>${back[i].ext}</td>
                <td>${back[i].reg}</td>
                <td>${back[i].cf}</td>
                <td>${back[i].creditos}</td>
                <td>${back[i].status}</td>
                </tr>
                `
            }
            table.innerHTML += output
        }else{
            table.innerHTML = `
            <tr>
                <td>Valor</td>
            </tr>
            <tr>
                <td>${back}</td>
            </tr>
            `
        }
    })
})
