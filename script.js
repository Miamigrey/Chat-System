const signupButton = document.getElementById('signup-button');
const signinButton = document.getElementById('signin-button');
const signupForm = document.getElementById('signup-form');
const signinForm = document.getElementById('signin-form');

signupButton.addEventListener('click', e => {
    signupForm.style.display = 'block';
    signinForm.style.display = 'none';
});

signinButton.addEventListener('click', e => {
    signupForm.style.display = 'none';
    signinForm.style.display = 'block';
});