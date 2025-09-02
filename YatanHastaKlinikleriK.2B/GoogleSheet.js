const scriptURL = 'https://script.google.com/macros/s/AKfycbxSlcGNRtnyhjmBjPb42DV4eo5te19rLxc96L-gAdPs8cN1XOP8WDFFAa1pb7VVb73Djg/exec'

const form = document.forms['contact-form']

form.addEventListener('submit', e => {
 e.preventDefault()
 fetch(scriptURL, { method: 'POST', body: new FormData(form)})
 .then(response => alert("Thank you! your form is submitted successfully." ))
 .then(() => { window.location.reload(); })
 .catch(error => console.error('Error!', error.message))
})
