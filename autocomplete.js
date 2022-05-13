document.addEventListener("DOMContentLoaded" , (event) => {



const form = document.getElementById('form');
 const searchInput = document.getElementById('search');
 const  submit = document.getElementById('submit');
 const ul = document.getElementById('ul');
 const url = 'traitement.php'

    searchInput.addEventListener('keyup', (e)=>{

        let value = e.target.value

        // console.log(value)

        if(value.length > 0){

            let formData = new FormData()

            formData.append('search', searchInput.value)
            console.log(formData)

            fetch(url,{

                method : 'POST',
                body: formData

            })

            .then(response => response.json())
            .then(data => {

                console.log(data)
            })



        }
        
    })

    



    







})