const id = document.querySelector('#form');

    form.addEventListener('submit', function(e) { 
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "/insertposts",
            data: $(this).serialize(),
            dataType: "json",
            success: function (response) {
                console.log(response)
            }
        }); 
    })