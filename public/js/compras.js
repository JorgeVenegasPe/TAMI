var currentIndex = 0;
var items = document.querySelectorAll(".carousel-item");
var descriptions = document.querySelectorAll(".carousel-description");
var prevBtn = document.getElementById("prevBtn");
var nextBtn = document.getElementById("nextBtn");

function showImage(index) {
  items.forEach(function (item) {
    item.style.display = "none";
  });
  descriptions.forEach(function (desc) {
    desc.classList.remove("active");
  });

  items[index].style.display = ""; //flex
  descriptions[index].classList.add("active");
}

showImage(currentIndex);

prevBtn.addEventListener("click", function () {
  currentIndex = (currentIndex - 1 + items.length) % items.length;
  showImage(currentIndex);
});

nextBtn.addEventListener("click", function () {
  currentIndex = (currentIndex + 1) % items.length;
  showImage(currentIndex);
});
