const form = document.querySelector('.form');
const formBox = document.querySelectorAll('.form__box');

// Buttons
const loginBtn = document.querySelector('#login');
const registerBtn = document.querySelector('#register');

// CSS class
const focusClass = 'form__label--focus';
const validClass = 'form__input--valid';
const hiddClass = 'form__register--hide';

function elements() {
  formBox.forEach(e => {
    const inputs = e.querySelector('.form__input');
    const labels = e.querySelector('.form__label');
    const eyes = e.querySelector('.form__eye');
    labelFloat(inputs, labels);
    togglePassword(inputs, eyes);
    toggleForm(inputs, labels, eyes);
    submit(inputs, labels, eyes);
  });
}

function labelFloat(e, el) {
  e.addEventListener('focus', () => {
    el.classList.add(focusClass);
  });
  e.addEventListener('blur', () => {
    if (!e.value) {
      el.classList.remove(focusClass);
    }
  });
}

function togglePassword(e, el) {
  if (el !== null) {
    el.addEventListener('click', () => {
      if (e.type === 'password') {
        el.innerHTML = 'visibility_off';
        e.setAttribute('type', 'text');
      } else {
        e.setAttribute('type', 'password');
        el.innerHTML = 'remove_red_eye';
      }
    });
  }
}

function toggleForm(e, el, ele) {
  const formReg = document.querySelector('.form__register');

  loginBtn.addEventListener('click', () => {
    formReg.classList.add(hiddClass);
    reset(e, el, ele);
  });

  registerBtn.addEventListener('click', () => {
    formReg.classList.remove(hiddClass);
    reset(e, el, ele);
  });
}

function submit(e, el, ele) {
  form.addEventListener('submit', event => {
    event.preventDefault();
    reset(e, el, ele);
  });
}

function reset(e, el, ele) {
  e.value = '';
  el.classList.remove(focusClass);
  if (ele !== null) {
    ele.innerText = 'remove_red_eye';
  }
  if (e.type === 'text' && e.id !== 'username') {
    e.setAttribute('type', 'password');
  }
}

elements();
