function getData() {
    let input = document.getElementById("campo").value;
    let content = document.getElementById("content");
    let url = "buscar.php";
    let formData = new FormData();
    formData.append('campo', input);

    fetch(url, {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        
        console.log(data);
    })
    .catch(err => console.log(err));
}
