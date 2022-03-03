const cin = document.getElementById('cin');
const cout = document.getElementById('cout');
const people = document.getElementById('people');
const errorElement = document.getElementById('error');
form.addEventListner('submit',(e)=>{
    let messages = []
    if(cin.value === '' || cin.value == null){
        messages.push('date is required');
    }
    if(cout.value === '' || cout.value == null){
        messages.push('date is required');
    }
    if(people.value === '' || people.value == null){
        messages.push('no of people is required');
    }

    if(messages.length > 0){
    e.preventDefault()
    errorElement.innerText = messages.join(',')
    } 
})