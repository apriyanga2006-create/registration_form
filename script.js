// script.js

const steps = document.querySelectorAll(".step");

const nextBtns = document.querySelectorAll(".next");

const prevBtns = document.querySelectorAll(".prev");

const progress = document.getElementById("progress");

let currentStep = 0;

/* Update Steps */

function updateSteps(){

    steps.forEach((step, index)=>{

        if(index === currentStep){

            step.classList.add("active");

        }else{

            step.classList.remove("active");

        }

    });

    progress.style.width =
        ((currentStep + 1) / steps.length) * 100 + "%";

}

/* Next Buttons */

nextBtns.forEach(btn=>{

    btn.addEventListener("click", ()=>{

        /* Password Validation */

        if(currentStep === 1){

            const password =
                document.getElementById("password").value;

            const confirmPassword =
                document.getElementById("confirmPassword").value;

            if(password.length < 6){

                alert("Password must be at least 6 characters");

                return;

            }

            if(password !== confirmPassword){

                alert("Passwords do not match");

                return;

            }

        }

        currentStep++;

        updateSteps();

    });

});

/* Previous Buttons */

prevBtns.forEach(btn=>{

    btn.addEventListener("click", ()=>{

        currentStep--;

        updateSteps();

    });

});