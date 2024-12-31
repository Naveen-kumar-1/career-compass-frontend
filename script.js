//  javascript for toggle menu
document.getElementById("menu").addEventListener("click", () => {
  document.getElementById("nav-links").style.right = "0px";
});
document.getElementById("close").addEventListener("click", () => {
  document.getElementById("nav-links").style.right = "-200px";
});
function selectedCourse() {
  var selectedOption = document.getElementById("course-select").value;

  var allCourses = document.querySelectorAll(".course-col");

  allCourses.forEach(function (course) {
    if (course.id.includes(selectedOption)) {
      course.style.display = "block";
    } else {
      course.style.display = "none";
    }
  });
}
