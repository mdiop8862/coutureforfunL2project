

const btn = document.querySelector(".btn-contain_valider") ;
    const form = document.querySelector("form") ;
     const error = document.getElementById("error");

             btn.addEventListener("click" , (e)=>{
                const taille = document.getElementById("taille").value;

                e.preventDefault() ; 
                if( taille == ""){
                    error.textContent = "Veillez remplir tous les champs";
                }
                
                else{
                    form.submit();
                }
             })