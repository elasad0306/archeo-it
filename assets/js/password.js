const generatePassword = document.getElementById("button-generate")

generatePassword.addEventListener("click", function (){
    const sizeOfPassword = parseInt(document.getElementById("number-of-character").value)
    const complexityOfPassword = document.getElementById("type-of-password").value

    //console.log(complexityOfPassword)

    let optionOfPassword = {
        size: sizeOfPassword,
        complexity: complexityOfPassword
    }

    try{
        fetch("http://127.0.0.1:8000/password", {
            method: "POST",
            headers: {
                "Content-type": "application/json"
            },
            body: JSON.stringify(optionOfPassword)
        }).then(response => response.json())
            .then(data => {
                let password = data["Password"]
                document.getElementById("password").value = password
                console.log(password);
                //window.location.href = "../register.php"
            });
    }
    catch (error){
        console.log(error)
    }




    //console.log(optionOfPassword)

    //console.log(sizeOfPassword)
    //console.log(complexityOfPassword)
})

