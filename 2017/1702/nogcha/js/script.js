$(".news-delete").click(function (event) {
  event.preventDefault();
  var no = $(this).attr("href");
  if (!no) { return; }
  if (!confirm("정말 삭제시겠습니까 ?")) { return; }
  $.post("delete-ok.php", {"no": no},
    function (count) {
      if (count) {
        alert("삭제를 완료했습니다");
        location.href = "./";
      } else {
        alert("삭제를 실패했습니다");
        history.back();
      }
    });
});

$(".comment-icon > .fa-heart").click(function () {
  $(this).css({"color": "red"});
});