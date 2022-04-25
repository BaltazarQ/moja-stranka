(function() {

const name = document.querySelector('#name')
const myComments = document.querySelector('.my-comments')
const commentForm = document.querySelector('#comment-form')


// vytvor pole pre LocalStorage, ak neexistuje. Ak extistuje, pouzi to pole
if(localStorage.getItem('comments') == null) {
    var myArray = []
} else {
    myArray = JSON.parse(localStorage.getItem('comments'))
}

// po kliknuti na submit
commentForm.addEventListener('submit', function(event){
    event.preventDefault()
    let firstNameValue = event.target.name.value
    let commentValue = event.target.comment.value
    
    // pridaj data z poli na stranke do LocalStorage, ak polia nie su prazdne
    if (firstNameValue === '') {
        alert('napis meno')
    } else if (commentValue === '' ) {
        alert('napis komentar')
    } else {
        myArray.push({
            firstName: firstNameValue,
            comment: commentValue})
            
            localStorage.setItem('comments', JSON.stringify(myArray))
        }
        
        let myIndex = (myArray.length -1)
        let divComment = document.createElement('div')
        divComment.setAttribute('class', 'comment-area')
        
        divComment.innerHTML = `<span>${myArray[myIndex].firstName}</span>
                                    <p>${myArray[myIndex].comment}</p>`

        myComments.prepend(divComment)

        event.target.name.value = ''
        event.target.comment.value = ''
        
        
    })
    let myStorage = JSON.parse(localStorage.getItem('comments'))
    
    
    myStorage.forEach(oneComent => {
        let divComment = document.createElement('div')
        divComment.setAttribute('class', 'comment-area')
        
        divComment.innerHTML = `<span>${oneComent.firstName}</span>
                                    <p>${oneComent.comment}</p>`

        myComments.prepend(divComment)
 
    });

})();