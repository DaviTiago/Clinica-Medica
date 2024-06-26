async function sendForm(form) {
    document.getElementById("email-span").innerText = '';
    document.getElementById("password-span").innerText = '';
    document.getElementById("loginFailMsg").innerText = '';

    if (!form.email.value && !form.senha.value) {
        document.getElementById("email-span").innerText = 'Preencha o email';
        document.getElementById("password-span").innerText = 'Preencha a senha';
        return;
    }
    else if (!form.email.value) {
        document.getElementById("email-span").innerText = 'Preencha o email';
        return;
    }
    else if (!form.senha.value) {
        document.getElementById("password-span").innerText = 'Preencha a senha';
        return;
    }


    try {
        const response = await fetch("php/login.php", { method: 'post', body: new FormData(form) });
        if (!response.ok) throw new Error(response.statusText);
        const result = await response.json();
        if (result.success) {
            window.location = result.detail;
        } else {
            document.getElementById("loginFailMsg").innerText = result.message;
            form.senha.value = "";
            form.email.focus();
        }
    } catch (e) {
        console.error('Erro:', e);
    }
}
window.onload = function () {
    const form = document.getElementById('formLogin');
    form.onsubmit = function (event) {
        event.preventDefault();
        sendForm(form);
    }
}
