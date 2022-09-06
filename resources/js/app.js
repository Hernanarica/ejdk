import emailjs from '@emailjs/browser';

const $form              = document.getElementById('form');
const $notification      = document.getElementById('notification-email');
const $closeNotification = document.getElementById('close-notification-email');

$form.addEventListener('submit', e => {
	e.preventDefault();
	
	emailjs.sendForm('service_gvvx71p', 'template_rjlwujr', '#form', 'PdorAKfMgdaFXiyWr')
		.then(function (response) {
			$notification.classList.replace('hidden', 'flex');
			$form.reset();
			console.log('SUCCESS!', response.status, response.text);
		}, function (error) {
			console.log('FAILED...', error);
		});
});

$closeNotification.addEventListener('click', e => {
	$notification.classList.replace('flex', 'hidden');
});