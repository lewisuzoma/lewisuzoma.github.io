const contactFormArr = {
		name: document.getElementById('contactForm').elements[0].value,
		email: document.getElementById('contactForm').elements[1].value,
		subject: document.getElementById('contactForm').elements[2].value,
		message: document.getElementById('contactForm').elements[3].value
};

const jsonFormat = JSON.stringify(contactFormArr);


console.log(jsonFormat);