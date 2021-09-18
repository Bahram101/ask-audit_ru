const form = document.getElementById('form');
const username = document.getElementById('username');
const phoneNumber = document.getElementById('phoneNumber');


let arr = []

showSuccess = (input) =>{   
    const inputParent = input.parentElement
    inputParent.classList.remove('error')
   
    

    arr = input.value
    console.log(arr)
  
}


showError = (input, message) => {
	const inputParent = input.parentElement;
	inputParent.classList.add('error');
	const small = inputParent.querySelector('small');
	small.innerText = message;
};

const checkInputs = (inputArray) => {
	inputArray.forEach((input) => {
		input.value.trim() === ''
			? showError(input, 'Заполните поле')
			: showSuccess(input);
	});
};

form.addEventListener('submit', (e) => {
	e.preventDefault();

	checkInputs([username, phoneNumber]);

    
   

});




