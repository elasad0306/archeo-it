const quill = new Quill('#editor', {
    modules : {
        toolbar:"#toolbar-container"

    },
    theme: 'snow',
    styles: {
        background: false,
        color: false
    }
});

const articleForm = document.getElementById("form-update")

articleForm.addEventListener("submit", function (submitting){
    submitting.preventDefault()
    //Pour récupérer le contenu de l'éditeur en html
    const contentEditor = quill.root.innerHTML

    //console.log(contentEditor)

    const fieldHidden = document.getElementById("content")

    //Récupérer le contenu  html de éditeur et on le mets dans le champ caché afin de l'envoyer vers la base de données
    fieldHidden.value=contentEditor

    //console.log(fieldHidden)

    //Envoie du formulaire vers la base de donnée
    try{
        fetch("../admin/save_update.php", {
            method: 'POST',
            body: new FormData(this)
        })
            .then(response =>response.text())
            .then(data =>{
                alert(data.text)
                window.location.href = "/"
            })

    }
    catch(error){
        console.log(error)
    }
})