function validateEmail(email){
    var r = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return r.test(email);

}   

function validePassword(password){
    return password.length >= 6;
}

const btn = document.querySelector(".btn-contain_valider") ;
        const form = document.querySelector("form") ;
        btn.addEventListener("click" , (e)=>{
            e.preventDefault();
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            if(!validateEmail(email) && email != ""){
                let a = document.getElementById("errmail");
                a.textContent  = "Adresse email invalide";
            }
            if (email == "" || password == "") {
                let error = document.getElementById("error");
                error.innerHTML = "Veuillez remplir tous les champs";
                error.style.color = 'red';
            }
            if(validateEmail(email) && email != "" && password != "") {
                form.submit();
            }

        })

             