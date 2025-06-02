
function generatePassword(){
    const numberOfCharacter = document.getElementById("numberofcharacter").value
    const typeOfCharacter = document.getElementById("type-of-password").value

    try{
        fetch(' http://127.0.0.1:8000', {
            method: 'POST',
            headers: {
                "Accept": "application/json",
                "Content-type": "application/json"
            },
            body: JSON.stringify({
                sizeOfPassword : numberOfCharacter,

                typePassword : typeOfCharacter
            })

        })
            .then(response => response.json())
            .then()
    }catch (error){
        console.log(error)
    }

}