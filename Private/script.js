function edit(id, textTask) {

    let form = document.createElement('form')
    let inputTask = document.createElement('input')
    let button = document.createElement('button')
    let task = document.querySelector ("#task_" + id)
    let inputId = document.createElement('input')

    form.action = 'index.php?pag=index&action=update'
    form.method = 'post'
    form.className= 'row'

    inputTask.type = 'text'
    inputTask.name = 'task'
    inputTask.className = 'col-9 form-group'
    inputTask.value = textTask

    inputId.type = 'hidden'
    inputId.name = 'id'
    inputId.value = id

    button.type = 'submit'
    button.className = 'col-3 btn btn-secondary'
    button.innerHTML = `Update`

    form.appendChild(inputTask)
    form.appendChild(button)
    form.appendChild(inputId)

    task.innerHTML = ``
    task.insertBefore(form, task[0])
    
}

function remove(id) {
    location.href = 'index.php?pag=index&action=remove&id='+id;
}

function accomplished(id) {
    location.href = 'index.php?pag=index&action=accomplished&id='+id;
}