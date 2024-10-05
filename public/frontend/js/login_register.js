// const wrapper = document.querySelector('.wrapper');
// const registerLink = document.querySelector('.register-link');
// const loginLink = document.querySelector('.loginLink');

// registerLink.addEventListener('click', ()=> {
//     wrapper.classList.add('active');
// });

// loginLink.addEventListener('click', ()=> {
//     wrapper.classList.remove('active');
// });
document.addEventListener('DOMContentLoaded', () => {
    const wrapper = document.querySelector('.wrapper');
    const registerLink = document.querySelector('.register-link');
    const loginLink = document.querySelector('.loginLink');

    if (registerLink) {
        registerLink.addEventListener('click', () => {
            wrapper.classList.add('active');
        });
    }

    if (loginLink) {
        loginLink.addEventListener('click', () => {
            wrapper.classList.remove('active');
        });
    }
});