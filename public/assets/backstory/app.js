var storyEditor = document.getElementById("content");
var storyForm = u("form.backstory");
if (storyEditor) {
    CKEDITOR.replace(storyEditor, {
        height: 400,
        toolbarCanCollapse: true,

        // Define the toolbar groups as it is a more accessible solution.
        toolbarGroups: [{
                name: "basicstyles",
                groups: ["basicstyles"]
            },
            {
                name: "links",
                groups: ["links"]
            },
            {
                name: "paragraph",
                groups: ["list", "blocks"]
            },
            {
                name: "document",
                groups: ["mode"]
            },
            {
                name: "insert",
                groups: ["insert"]
            },
            {
                name: "styles",
                groups: ["styles"]
            }
        ],
        embed_provider: "//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}",
        extraPlugins: "codesnippet,embed,autoembed,image2",
        codeSnippet_theme: "monokai_sublime",
        autoGrow_minHeight: 460,
        autoGrow_onStartup: true,
        contentsCss: [
            "body {font-size: 16px;font-family: Arial, Helvetica, sans-serif;color: #757575;-webkit-font-smoothing: antialiased; line-height: 1.6; }",
            "img {  height: auto; max-width: 100%; }"
        ]
    });

    u(".insert-images-button").each(function (el, i) {
        u(el).on("click", function (e) {
            var image = u(el).data("img");
            console.log("image click " + image);
            CKEDITOR.instances.content.insertHtml('<img src="' + image + '" alt="" class="image">');
        });
    });

    u(".insert").on("click", function (e) {
        e.preventDefault();
        CKEDITOR.instances.content.insertHtml('<p><img class="image"  src="http://staging.shawnsandy.design/imgfly/images/jarvis.jpeg?w=448&amp;h=340&amp;fit=crop-top" alt=""></p>');
    });

    u(".insert-video-button").on("click", function (e) {

        e.preventDefault();
        console.log("video box");
        //   var vid = document.getElementById("video-embed").value;
        // var vid = u('#video-embed').attr("value");
        console.log(vid);
        CKEDITOR.instances.content.insertHtml("<p>[video ='dsds']</p>");
        var vid = document.getElementById("video-embed").value = "";

    })

}

u(".manage-categories").handle("click", function (e) {
    //console.log("manage categories");
    u(".modal.categories").addClass("is-active");
});

u(".modal-close, .close-box").handle("click", function(e) {
//e.preventDefault();
u(".modal").removeClass("is-active");
});

if (storyForm.length > 0) {
    var file = document.getElementById("cover-photo");
    if (file) {
        file.onchange = function () {
            if (file.files.length > 0) {
                document.getElementById("file-name").innerHTML = file.files[0].name;
                //console.log(file)
            }
        };
    }
    var choicesConf = {
        addItems: true,
        placeholder: true,
        addItems: true,
        editItems: true,
        removeItems: true
    };

    var typeChoices = new Choices("#type", choicesConf);
    var featuredChoices = new Choices("#featured", choicesConf);
    var statusChoices = new Choices("#status", choicesConf);

    var choicesSelect = {
        addItems: true,
        placeholder: true,
        addItems: true,
        editItems: true,
        removeItems: true,
        placeholderValue: ""
    };

    var categoryChoices = new Choices("#category", choicesSelect);

    u(".manage-categories").removeClass('is-invisible')

}
