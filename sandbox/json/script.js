const xhr = new XMLHttpRequest();
xhr.open('GET', '/sandbox/json/handler.php');
xhr.send();

xhr.addEventListener('load', function(){
    //JSON.parse() - принимает json и возвращает объект
    const responose = JSON.parse(xhr.response);    
    console.log(responose);
    responose.forEach(element => {
        console.log(element.name, element.price);
    });
});