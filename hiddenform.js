$("#ida").on("click", function () {
    console.log(test);
})

const test = ["first", "second"];


function submitByPost(action_php, data) {
  // 見えないフォームを作ってPOSTを送信
 
  var form = document.createElement("form");
  form.style.display = "none";
  document.body.appendChild(form);
 
  if (data !== undefined) {
    for (var name in data) {
      var input = document.createElement("input");
      input.setAttribute("type", "hidden");
      input.setAttribute("name", name);
      input.setAttribute("value", data[name]);
      form.appendChild(input);
    }
  }
 
  form.setAttribute("action", action_php);
  form.setAttribute("method", "post");
  form.submit();
 
  document.body.removeChild(form);
}