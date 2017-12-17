function alert(message, type) {

    $.notify({
        message: message,
        icon: ''
    },{
        type: type,
        placement: {
            from: "top",
            align: "center"
        },
        delay: 5000
    });
}