function notify(message, type) {

    $.notify({
        icon: 'alert',
        message: message
    },{
        type: type,
        placement: {
            from: "top",
            align: "center"
        },
        delay: 5000
    });
}