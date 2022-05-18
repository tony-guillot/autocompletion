document.addEventListener("DOMContentLoaded" , (event) => {



const form = document.getElementById('search_form');
 const searchInput = document.getElementById('search');
 const  submit = document.getElementById('submit');
 const ul = document.getElementById('ul');
 const url = 'traitement.php'

    searchInput.addEventListener('keyup', (e)=>{

        let userValue = e.target.value

        // console.log(value)

        if(userValue.length > 0){

            let formData = new FormData(form)
            formData.append('search', userValue)

            fetch(url,{
                method : 'POST',
                body: formData, 
            })

            .then(response => response.json())
            
            .then(data =>  {
                console.log(data)
                let start = data.start
               

              data.forEach(element => 
                //  console.log(element)
               jsonStart = JSON.stringify(element.nom));

                console.log(jsonStart)
               ul.innerHTML += "<li><a href='element.php?id=" + start.id + "'>" + jsonStart + "<a/></li>"

            })  

        }
    
    })

})