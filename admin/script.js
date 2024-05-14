const  name = document.getElementById('name')
const pass = document.getElementById('password')
const form = document.getElementById('form')

form.addEventListener('submit', (e) => {
    let messages = []
    if(name.value === '' || name.value == null ){
    messages.push('name is required')
    }

  if (pass.value.lenght <= 6){
      messages.push('password must be 6 char')
  }

    if( messages.lenght > 0){
    e.preventDefault();
  errorElement.innerText = messages.join(',');
    }
})