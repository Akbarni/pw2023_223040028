const keyword = document.getElementById("keyword");
const searchCountainer = document.getElementById("search-container");
const searchButton = document.getElementById("search-button");

searchButton.style.display = "none";

keyword.onkeyup = function () {
  fetch("ajak/search.php?keyword=" + keyword.value)
    .then((Response) => Response.text())
    .then((text) => (searchCountainer.inertHTML = text));
};
