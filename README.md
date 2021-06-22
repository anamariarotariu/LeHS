# LeHS

1.GET http://localhost:3000/LeHS/api/html-questions - returns all HTML questions and answears.Example
{
    "id": 111, "question": "Ce tag se foloseste pentru a stiliza un document HTML printr-un fisier CSS?", "choice1": "style","choice2":"design", "choice3":"link","answer": 3, "nivel_dificultate":1
}
2.GET http://localhost:3000/LeHS/api/css-questions - returns all  CSS questions and answears
3.POST http://localhost:3000/LeHS/api/html-questions/add- add a new HTML question
4.POST http://localhost:3000/LeHS/api/css-questions/add- add a new CSS question
5.GET http://localhost:3000/LeHS/api/css-questions/([0-9]+)-return the CSS question that have the specified ID
6.GET http://localhost:3000/LeHS/api/html-questions/([0-9]+)-return the HTML question that have the specified ID
7.DELETE http://localhost:3000/LeHS/api/css-questions/delete/([0-9]+)-delete the questions that have the specified ID
8.DELETE http://localhost:3000/LeHS/api/HTML-questions/delete/([0-9]+)-delete the questions that have the specified ID
