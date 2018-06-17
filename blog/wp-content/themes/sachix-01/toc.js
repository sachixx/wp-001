$(function(){
        var idcount = 1;
        var toc = '';
        var currentlevel = 0;
        $("article h2,article h3,article h4",this).each(function(){
            this.id = "chapter-" + idcount;
            idcount++;
            var level = 0;
            if(this.nodeName.toLowerCase() == "h2") {
                level = 1;
            } else if(this.nodeName.toLowerCase() == "h3") {
                level = 2;
            } else if(this.nodeName.toLowerCase() == "h4") {
                level = 3;
            }
            while(currentlevel < level) {
                toc += '<ol class="chapter">';
                currentlevel++;
            }
            while(currentlevel > level) {
                toc += "</ol>";
                currentlevel--;
            }
            toc += '<li><a href="#' + this.id + '">' + $(this).html() + "</a></li>\n";
        });
        while(currentlevel > 0) {
            toc += "</ol>";
            currentlevel--;
        }
        $("#toc").html(toc);
});