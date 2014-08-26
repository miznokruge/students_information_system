// Okay I admit the code is ugly...
if (typeof console === "undefined" || typeof console.log === "undefined") { //Fix IE window.console bug
    console = {};
    console.log = function() {
    };
}
$(document).ready(function() {
    var defaultOptions = {
        persist: true,
        expiration: "never",
        name: "CRM - Tricipta Media Perkasa",
        scope: {
            write: true,
            read: true,
            account: true
        },
        success: initDoc
    };
    if (typeof Trello === "undefined") {
        window.location.reload(true);
    }
    if (!Trello.authorized()) {
        return Trello.authorize(defaultOptions);
    }
    $(window).bind("hashchange", router);
    $('.ui-dialog-titlebar-close').hide();
});

var initDoc = function() {
    if (!Trello.authorized())
        return Trello.authorize(defaultOptions);
    Trello.get('/members/me/cards', function(cards) {
        var ccards = cards.length;
        console.log(ccards);

        $.each(cards, function(ix, card) {
            console.log(card);
        });


        //router();
    }, function(xhr) {
        if (xhr.status == 401) {
            Trello.deauthorize();
            window.location.reload(true);
            Trello.authorize(defaultOptions);
        } else {
            window.location.reload(true);
        }
    });
};

var router = function() {
    var hash = location.hash.replace("#", "");
    if (hash !== "")
    {
        getBoard(hash);
        GetNotifications(hash);
    } else {
        if (window.myself) {
            listBoards();
        } else {
            initDoc();
        }
    }
};
