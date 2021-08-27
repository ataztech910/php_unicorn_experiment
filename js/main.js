let xhttp = new XMLHttpRequest();

const getComponent = (component, param) => {
    xhttp.onreadystatechange = () => {
        console.log(xhttp.responseText);
        const content = document.getElementById("TestComponent");
        content.innerHTML = xhttp.responseText;
    };
    xhttp.open(
        "GET",
        `/core/componentRender.php?component=${component}&param=${param}`,
        true
        );
    xhttp.send(); 
};