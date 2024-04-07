function validateEmail(email){
    var r = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return r.test(email);

}   

function validePassword(password){
    return password.length >= 6;
}

const btn = document.querySelector(".btn-contain_valider") ;
        let isvalid = true;
        const form = document.querySelector("form") ;
        btn.addEventListener("click" , (e)=>{
            e.preventDefault() ;
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            const cpassword = document.getElementById("cpassword").value;
            const telephone = document.getElementById("telephone").value;
            const nom = document.getElementById("nom").value;
            const prenom = document.getElementById("prenom").value;
            if(!validateEmail(email) && email != ""){
                  let span = document.getElementById("errmail");
                  span.textContent = "email invalide " ;
                  isvalid = false;
            }
            if (email == "" || password == "" || cpassword== "" || telephone == "" || nom == "" || prenom == "") {
                let myerror = document.getElementById("error");
                myerror.textContent = "Veuillez remplir tous les champs";
                isvalid = false;
            }
            if(password != cpassword && password != ""){
                let error = document.getElementById("error");
                error.textContent = "Les deux mots de passe ne sont pas identiques";
                isvalid = false;
            }
            if(!validePassword(password) && password != ""){
                let b = document.getElementById("errpassword");
                b.textContent  = "Veulleiz saisir au moins 6 caractéres";
        
                isvalid = false;
            }
            if(!validateEmail(email) && email != ""){
                let a = document.getElementById("errmail");
                a.textContent  = "Adresse email invalide";
                isvalid = false;
            }
            if(isvalid) {
                form.submit();
            }
            
        })

             