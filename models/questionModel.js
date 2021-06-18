let questions = require("../database.js");
//function for finding all HTML questions
function findAllHtml() {
  questions.createTables();
  return questions.getAllHTMLQuestions();
}
//function for finding all CSS questions
function findAllCss() {
  questions.createTables();
  return questions.getAllCSSQuestions();
}
//function for getting HTML questions of a specific difficulty
function findHtmlById(id) {
  questions.createTables();
  return questions.getHTMLQuestionById(id);
}
//function for getting CSS questions of a specific difficulty
function findCssById(id) {
  questions.createTables();
  return questions.getCSSQuestionById(id);
}
//function for inserting a HTML question in db
function insertHTMLQuestion(
  id,
  question,
  choice1,
  choice2,
  choice3,
  answer,
  nivel_dificultate
) {
  questions.createTables();
  return questions.insertHTMLQuestion(
    id,
    question,
    choice1,
    choice2,
    choice3,
    answer,
    nivel_dificultate
  );
}
module.exports = {
  findAllHtml,
  findAllCss,
  findHtmlById,
  findCssById,
  insertHTMLQuestion,
};