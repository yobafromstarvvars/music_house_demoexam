var goToProductBtns = document.getElementsByClassName("go-to-product-btn");

for (let i = 0; i < goToProductBtns.length; i++) {
    let btn = goToProductBtns[i];
    btn.addEventListener("click", goToProduct)
}

function goToProduct(e) {
    
}

function fetchProduct(title) {
    return fetch("url"), {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            name: 'User 1'
        })
    }.then(res => {
        return res.json()
    })
    .then(data => console.log(data))
    .catch(error => console.log('Error'))
}