const form = document.getElementById('info')
let table = document.getElementById('table')

form.addEventListener('submit', e =>{
    e.preventDefault()
    let data = new FormData(form)
    fetch('backend.php', {
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(back =>{
        let output
        table.innerHTML = `
        <tr>
            <td>ID</td>
            <td>Matricula</td>
            <td>Semestre</td>
            <td>Materia</td>
            <td>Sección</td>
            <td>Periodo</td>
            <td>CFO</td>
            <td>EXT</td>
            <td>REG</td>
            <td>CF</td>
            <td>Creditos</td>
            <td>Status</td>
        </tr>
        `
        for(i in back){
            output += `
            <tr>${back[i].id}</tr>
            <tr>${back[i].matricula}</tr>
            <tr>${back[i].semestre}</tr>
            <tr>${back[i].materia}</tr>
            <tr>${back[i].seccion}</tr>
            <tr>${back[i].periodo}</tr>
            <tr>${back[i].cfo}</tr>
            <tr>${back[i].ext}</tr>
            <tr>${back[i].reg}</tr>
            <tr>${back[i].cf}</tr>
            <tr>${back[i].creditos}</tr>
            <tr>${back[i].status}</tr>
            `
        }
        table.innerHTML += output
    })
})