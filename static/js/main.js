$(".match").click((el) => {

    $(".match-selected").prop("class", "")

    
    $("td:contains('" + el.currentTarget.innerText + "')").parent().prop("class", "match-selected");
    
});