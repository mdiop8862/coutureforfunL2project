const btn = document.querySelector(".btn-contain_valider") ;
             const form = document.querySelector("form") ;
             const myerror = document.getElementById("error");
             btn.addEventListener("click" , (e)=>{
                e.preventDefault() ; 
                const nom = document.getElementById("nom").value;
                const prenom = document.getElementById("prenom").value;
                const tel = document.getElementById("Tel").value;
                const email = document.getElementById("email").value;
                if(nom == "" || prenom =="" || tel =="" || email==""){
                    myerror.textContent  = "Veuillez remplir tous les champs";
                   
                }    
                else
                    form.submit() ;
             })