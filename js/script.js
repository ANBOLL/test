document.addEventListener("DOMContentLoaded", function () {
    const button = document.querySelector("button");

    button.addEventListener("click", function (event) {
        event.preventDefault();
        const name_value = document.querySelector(".name_feedback").value;
        const email_value = document.querySelector(".email_feedback").value;
        const question_value = document.querySelector(".quest_feedback").value;
        const name_reg = document.querySelector(".name_feedback");
        const email_reg = document.querySelector(".email_feedback");
        const question_reg = document.querySelector(".quest_feedback");
        const name_mes = document.querySelector("#label_name");
        const email_mes = document.querySelector("#label_email");
        const question_mes = document.querySelector("#label_quest");
        const reg_name = /.+/;

        let flag_name = false;

        if (reg_name.test(name_value)) {
            console.log("Name - GOOD");
            name_reg.style.border = "3px solid rgb(0, 196, 0)";
            name_mes.style.color = "rgb(0, 196, 0)";
            name_mes.innerHTML = "Ваше имя:";
            flag_name = true;
        } else {
            console.log("Name = NULL");
            name_reg.style.border = "3px solid rgb(255, 0, 0)";
            name_mes.style.color = "rgb(255, 0, 0)";
            name_mes.innerHTML = "Поле Имя не может быть пустым !";
            flag_name = false;
        }

        const reg_email = /^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/;
        let flag_email = false;

        if (reg_email.test(email_value)) {
            console.log("Email - GOOD");
            email_reg.style.border = "3px solid rgb(0, 196, 0)";
            email_mes.style.color = "rgb(0, 196, 0)";
            email_mes.innerHTML = "Ваш E-mail:";
            flag_email = true;
        } else {
            console.log("Email = NULL");
            email_reg.style.border = "3px solid rgb(255, 0, 0)";
            email_mes.style.color = "rgb(255, 0, 0)";
            email_mes.innerHTML = "Поле E-mail заполненно не корректно, пример: name@mail.com.";
            flag_email = false;
        }

        const reg_question = question_value.length;
        let flag_question = false;

        if (reg_question <= 50) {
            console.log("Quest - GOOD");
            question_reg.style.border = "3px solid rgb(0, 196, 0)";
            question_mes.style.color = "rgb(0, 196, 0)";
            question_mes.innerHTML = "Ваш вопрос:";
            flag_question = true;
        }
        else if (reg_question >= 50) {
            console.log("Quest = NULL");
            question_reg.style.border = "3px solid rgb(255, 0, 0)";
            question_mes.style.color = "rgb(255, 0, 0)";
            question_mes.innerHTML = `Максимальна длина вопроса 50 символов вы ввели:${reg_question}`;
            flag_email = false;
        }

        if (flag_name && flag_email && flag_question) {
            console.log("Все хорошо");
            //const form = document.querySelector("#form").submit();

            let formjson = [
                name_value,
                email_value,
                question_value
            ];
              
            const json = JSON.stringify(formjson);
            //console.log(json);


            const postjs = fetch('/json.php', {
                method: 'POST',
                body: json
             });

             postjs.then(function(reselve){
             reselve.text().then(function(c){
                 console.log(c);
             });
     });
    

            // fetch("json.php", {
            //     method: "POST"
            // }).then(function (response) {
            //     const json = JSON.stringify(formjson);
            //     echo (json);
            //     console.log("ok");
            // }).catch(function (error) {
            //     console.log("no");
            // });


            //const request = fetch("/data.php");


        }
    });

});