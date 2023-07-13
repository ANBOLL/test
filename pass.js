document.addEventListener("DOMContentLoaded", function () {
    const button = document.querySelector("button");

    button.addEventListener("click", function (event) {
        event.preventDefault();
        const input_pass = document.querySelector("#pass");

        const reg = /.+/;
        let error = false;

        if(reg.test(input_pass.value)){
            console.log("pass - GOOD");
            input_pass.style.border = "3px solid rgb(0, 196, 0)";
            input_pass.style.color = "rgb(0, 196, 0)";
            error = true;
        } else {
            console.log("pass = NULL");
            input_pass.style.border = "3px solid rgb(255, 0, 0)";
            input_pass.style.color = "rgb(255, 0, 0)";
            error = false;
        }
        if(error){
            console.log("Все хорошо");

            let formjson = [input_pass.value];
              
            const json = JSON.stringify(formjson);
            console.log(json);


            const postjs = fetch('/CASH.php', {
                method: 'POST',
                body: json
             });

             postjs.then(function(reselve){
             reselve.text().then(function(c){
                 console.log(c);
             });
            });}


        //console.log(input_pass.value);
    //console.log(input_pass.value);
   
    //const request = fetch("/pass.php");
    //console.log(request);

    //request.then(function(reselve){
     //   reselve.text().then(function(c){
      //      console.log(c);
      //  });
    //});
});
});