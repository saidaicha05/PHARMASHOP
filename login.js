// changement de section login-register
const login = document.querySelector('.login');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

registerLink.addEventListener('click', () => {
    console.log("login")
    login.classList.add('active');
});

loginLink.addEventListener('click', ()=>{
    login.classList.remove('active');
});

const btn = document.querySelector('.btn');
btn.onclick = () => {
    login.style.display = "flex"
}

const btnclose = document.querySelector('.close')
btnclose.onclick = () => {
    login.style.display = "none"
}