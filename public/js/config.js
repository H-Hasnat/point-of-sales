function success(msg){
    Toastify({
        text: msg,
        duration: 3000,

        newWindow: true,
        // close: true,
        gravity: "top", // `top` or `bottom`
        position: "left", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
          background: "green",
        },
        onClick: function(){} // Callback after click
      }).showToast();


          }


          function error(msg){
            Toastify({
                text: msg,
                duration: 3000,

                newWindow: true,
                // close: true,
                gravity: "top", // `top` or `bottom`
                position: "left", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                  background: "red",
                },
                onClick: function(){} // Callback after click
              }).showToast();


                  }

                
