const form = document.getElementById('form');
const username = document.getElementById('user-name');
const fullname = document.getElementById('full-name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const theme = document.getElementById('theme');
const submit = document.getElementById('submit')

submit.addEventListener('click', () => {
  var c1 = false,
    c2 = false,
    c3 = false,
    c4 = false,
    c5 = false;
  const usernameValue = username.value;
  let user_reg=/^[A-Za-z][A-Za-z0-9_]{5,29}$/;
  if (!usernameValue.match(user_reg)) {
    document.getElementById('error-msg-user').style.display = 'block';
    document.getElementById('check1').style.display = 'none';
    document.getElementById('error1').style.display = 'block';
    c1 = false;
  } else {
    document.getElementById('error-msg-user').style.display = 'none';
    document.getElementById('check1').style.display = 'block';
    document.getElementById('error1').style.display = 'none';
    c1 = true;
  }

  const fullnameValue = fullname.value;
  let full_name=/^[A-Za-z][A-Za-z0-9_\s]{5,29}$/;
  if (!fullnameValue.match(full_name)) {
    document.getElementById('error-msg-full').style.display = 'block';
    document.getElementById('check2').style.display = 'none';
    document.getElementById('error2').style.display = 'block';
    c2 = false;
  } else {
    document.getElementById('error-msg-full').style.display = 'none';
    document.getElementById('check2').style.display = 'block';
    document.getElementById('error2').style.display = 'none';
    c2 = true;
  }

  const emailValue = email.value;
  let isEmail = /^[a-zA-Z0-9.+_-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,15}$/;
  if (!emailValue.match(isEmail)) {
    document.getElementById('error-msg-email').style.display = 'block';
    document.getElementById('check3').style.display = 'none';
    document.getElementById('error3').style.display = 'block';
    c3 = false;
  } else {
    document.getElementById('error-msg-email').style.display = 'none';
    document.getElementById('check3').style.display = 'block';
    document.getElementById('error3').style.display = 'none';
    c3 = true;
  }

  const passwordValue = password.value;
  let isPassword = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
  if (!passwordValue.match(isPassword)) {
    document.getElementById('error-msg-pass').style.display = 'block';
    document.getElementById('check4').style.display = 'none';
    document.getElementById('error4').style.display = 'block';
    c4 = false;
  } else {
    document.getElementById('error-msg-pass').style.display = 'none';
    document.getElementById('check4').style.display = 'block';
    document.getElementById('error4').style.display = 'none';
    c4 = true;
  }
  const themeValue = theme.value;
  let themereg = /^([1-7])$/;
  if (!themeValue.match(themereg)) {
    document.getElementById('error-msg-theme').style.display = 'block';
    document.getElementById('check5').style.display = 'none';
    document.getElementById('error5').style.display = 'block';
    c5 = false;
  } else {
    document.getElementById('error-msg-theme').style.display = 'none';
    document.getElementById('check5').style.display = 'block';
    document.getElementById('error5').style.display = 'none';
    c5 = true;
  }
  const themeText = theme.options[theme.selectedIndex].text;
  if (c1 && c2 && c3 && c4 && c5) {
    alert('Team registered successfully !! \n\nDetails submitted are as follows: \n1. Username: ' + usernameValue +
      ' \n2. Full Name: ' + fullnameValue + ' \n3. Email: ' + emailValue+' \n4. Theme: '+themeText);
    window.location.replace("success.html");
  }

})