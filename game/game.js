const question = document.getElementById("question");
const choices = Array.from(document.getElementsByClassName("choice-text"));
const progressText = document.getElementById("progress");
const scoreHud = document.getElementById("score");
const progressBarFull = document.getElementById("progress--bar--full");
const loader = document.getElementById("loader");
const game = document.getElementById("game");
let currentQuestion = {};
let acceptingAnswer = false;
let score = 0;
let questionCounter = 0;
let availableQuestion = [];
let questions = [];
let url = "http://localhost:5000/api/html-questions";
function showHtmlQuestions() {
  fetch(url)
    .then((res) => {
      return res.json();
    })
    .then((loadedQuestion) => {
      questions = loadedQuestion.map((loadedQuestion) => {
        const formattedQuestion = {
          question: loadedQuestion.question,
        };
        const answerChoices = [loadedQuestion.choice1, loadedQuestion.choice2];
        //place the answer in a random position
        formattedQuestion.answer = Math.floor(Math.random() * 2) + 1;
        answerChoices.splice(
          formattedQuestion.answer - 1,
          0,
          loadedQuestion.answer
        );
        answerChoices.forEach((choice, index) => {
          formattedQuestion["choice" + (index + 1)] = choice;
        });
        return formattedQuestion;
      });
      startGame();
    })
    .catch((error) => {
      console.log(error);
    });
}
showHtmlQuestions();
function showCssQuestions() {
  fetch("http://localhost:5000/api/css-questions")
    .then((res) => {
      return res.json();
    })
    .then((loadedQuestion) => {
      questions = loadedQuestion.map((loadedQuestion) => {
        const formattedQuestion = {
          question: loadedQuestion.question,
        };
        const answerChoices = [loadedQuestion.choice1, loadedQuestion.choice2];
        //place the answer in a random position
        formattedQuestion.answer = Math.floor(Math.random() * 3 + 1);
        answerChoices.splice(
          formattedQuestion.answer - 1,
          0,
          loadedQuestion.answer
        );
        answerChoices.forEach((choice, index) => {
          formattedQuestion["choice" + (index + 1)] = choice;
        });

        return formattedQuestion;
      });
      startGame();
    })
    .catch((error) => {
      console.log(error);
    });
}
//Constants
const CORRECT_BONUS = 20;
const MAX_QUESTIONS = 5;
startGame = () => {
  questionCounter = 0;
  score = 0;
  availableQuestion = [...questions];
  getNewQuestion();
  game.classList.remove("hidden");
  loader.classList.add("hidden");
};
getNewQuestion = () => {
  if (availableQuestion.length === 0 || questionCounter >= MAX_QUESTIONS) {
    localStorage.setItem("mostRecentScore", score);
    //go to the end page
    return window.location.assign("http://localhost:3000/LeHS/game/end.php");
  }
  questionCounter++;
  progressText.innerText = `Question ${questionCounter}/${MAX_QUESTIONS}`;
  progressBarFull.style.width = `${(questionCounter / MAX_QUESTIONS) * 100}%`;
  const questionIndex = Math.floor(Math.random() * availableQuestion.length);
  currentQuestion = availableQuestion[questionIndex];
  //populate the question container
  question.innerText = currentQuestion.question;
  //populate the answer fields
  choices.forEach((choice) => {
    const number = choice.dataset["number"];
    choice.innerText = currentQuestion["choice" + number];
  });
  //we splice up the array and we get rid of the questions that have already been shown
  availableQuestion.splice(questionIndex, 1);
  acceptingAnswer = true;
};
choices.forEach((choice) => {
  choice.addEventListener("click", (e) => {
    if (!acceptingAnswer) {
      return;
    }
    acceptingAnswer = false;
    const selectedChoice = e.target;
    const selectedAnswer = selectedChoice.dataset["number"];
    console.log(currentQuestion);
    // console.log(selectedAnswer == currentQuestion.answer);
    let classToApply = "incorrect";
    if (selectedAnswer == currentQuestion.answer) {
      classToApply = "correct";
    }
    selectedChoice.parentElement.classList.add(classToApply);
    if (classToApply === "correct") {
      incrementScore(CORRECT_BONUS);
    }
    //for the user to see which is the correct answer
    setTimeout(() => {
      selectedChoice.parentElement.classList.remove(classToApply);
      getNewQuestion();
    }, 1000);
  });
});
incrementScore = (num) => {
  score += num;
  scoreHud.innerText = score;
};
