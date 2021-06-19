//file system => used for writing questions in a json file

const fs = require("fs");
function writeDataToFile(filename, content) {
  fs.stat(filename, (error, stats) => {
    if (error) {
      console.log(error);
    } else {
      if (stats.size === 0 || stats.size < 5979) {
        fs.writeFileSync(filename, JSON.stringify(content), "utf8", (err) => {
          if (err) {
            console.log(err);
          }
        });
      }
    }
  });
}

module.exports = {
  writeDataToFile,
};
