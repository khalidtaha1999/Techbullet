const form = document.getElementById("quiz-form");
const quizzes = [...form.querySelectorAll(".quiz")];
let counter = 0;

const overlay = document.querySelector(".overlay");
const closeOverlay = overlay.querySelector("button");
const scoreSpan = overlay.querySelector("#true-answers");
const numberOfQuestion = overlay.querySelector("#all-question");

numberOfQuestion.textContent = quizzes.length;

console.log(scoreSpan, numberOfQuestion);
const showOverlay = () => {
  overlay.classList.remove("hidden");
};

form.addEventListener("submit", (event) => {
  event.preventDefault();
  submitingForm();
});

const submitingForm = () => {
  counter = 0;
  quizzes.forEach((quiz) => {
    const inputs = quiz.querySelectorAll("input");
    inputs.forEach((input) => {
      if (input.getAttribute("answer") == "1") {
        input.parentElement.querySelector("label").classList.add("true");
      }
      if (input.checked && input.getAttribute("answer") == "1") {
        counter++;
      }
      if (input.checked && input.getAttribute("answer") !== "1") {
        input.parentElement.querySelector("label").classList.add("false");
      }
    });
  });
  scoreSpan.textContent = counter;
  showOverlay();
};

const hideOverlay = () => {
  overlay.classList.add("hidden");
};

overlay.addEventListener("click", hideOverlay);
closeOverlay.addEventListener("click", hideOverlay);
