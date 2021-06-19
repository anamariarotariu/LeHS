const http = require("http");
const {
  getHTMLQuestions,
  getHTMLQuestionById,
  getCSSQuestions,
  getCSSQuestionById,
  insertHTMLQuestion,
} = require("./controllers/questionController");
const server = http.createServer((req, res) => {
  const headers = {
    "Access-Control-Allow-Origin": "*",
    "Access-Control-Allow-Methods": "POST, GET",
  };
  if (req.url === "/api/html-questions" && req.method === "GET") {
    getHTMLQuestions(req, res);
  } else if (req.url === "/api/css-questions" && req.method === "GET") {
    getCSSQuestions(req, res);
  } else if (
    req.url.match(/\/api\/html-questions\/([0-9]+)/) &&
    req.method === "GET"
  ) {
    const id = req.url.split("/")[3];
    getHTMLQuestionById(req, res, id);
  } else if (
    req.url.match(/\/api\/css-questions\/([0-9]+)/) &&
    req.method === "GET"
  ) {
    const id = req.url.split("/")[3];
    getCSSQuestionById(req, res, id);
  } else if (req.url === "/api/html-questions/add" && req.method === "POST") {
    let body = "";
    req.on("data", (chunk) => {
      body += chunk.toString();
    });
    req.on("end", () => {
      const result = JSON.parse(body);
      console.log(result.id);
      console.log(result.question);
      console.log(result.choice1);
      console.log(result.choice2);
      console.log(result.choice3);
      console.log(result.answer);
      console.log(result.nivel_dificultate);
      console.log("SERVER OUT");
      insertHTMLQuestion(
        result.id,
        result.question,
        result.choice1,
        result.choice2,
        result.choice3,
        result.answer,
        result.nivel_dificultate
      );
    });
  } else {
    res.writeHead(404, { "Content-Type": "application/json" });
    res.end(JSON.stringify({ message: "Route not found" }));
  }
});
const PORT = process.env.PORT || 5000;
server.listen(PORT, () => console.log(`Server running on port ${PORT}`));
