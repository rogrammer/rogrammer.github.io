var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) {
  return document.getElementById(id);
};

window.onload = function () {
  $("display_results").onclick = displayResults;
  $("display_scores").onclick = displayScores;
  $("add").onclick = addScore;
};

function displayResults() {
  var average = 0;
  for (var i = 0; i < scores.length; i++) {
    average = (average * i + scores[i]) / (i + 1);
  }
  document.getElementById("results").innerHTML =
    "<h2> Results </h2><br /> Average score is " + average + "<br > ";

  var max = Math.max(...scores);
  document.getElementById("results").innerHTML +=
    "High score = " +
    names[scores.indexOf(max)] +
    " with score of " +
    max +
    "<br > ";
}

function displayScores() {
  document.getElementById("scores_table").innerHTML =
    "<thead><h2> Scores </h2></thead><tbody id='body'><tr><td>Name</td><td>Score</td></tr></tbody>";

  for (var i = 0; i < names.length; i++) {
    document.getElementById("body").innerHTML +=
      "<tr><td>" + names[i] + "</td><td>" + scores[i] + "</td></tr>";
  }
}

function addScore() {
  var name = document.getElementById("name").value;
  var score = document.getElementById("score").value;

  if (name == "" || score < 0 || score > 100 || score == "") {
    alert("You must enter a name and a valid score");
  } else {
    names.push(name);
    scores.push(parseInt(score));
  }

  document.getElementById("name").value = "";
  document.getElementById("score").value = "";
}
