function publishToTable(){
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const error = document.getElementById('error');
  error.innerHTML = (!name || !email) ? 'Nome e email é requerido':'';
  if(name && email){
    const tableElement = document.getElementById('table');
    const trElement = document.createElement('tr');
    const tbodyElement = document.createElement('tbody');
    const nameEle = document.creatElement('td');
    const emailEle = document.createElement('td');
    nameEle.innerHTML = name;
    emailEle.innerHTML = email;
    trElement.appendChild(nameEle);
    trElement.appendChild(emailEle);
    tbodyElement.appendChild(trElement);
    tableElement.appendChild(tbodyElement);
  }
}
