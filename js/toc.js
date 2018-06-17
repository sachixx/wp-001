
$(function(){
    var idcount = 1;
    var toc = '';
    var currentlevel = 0;
    $("article h2,article h3,article h4",this).each(function(){
        this.id = "chapter-" + idcount;
        idcount++;
        var level = 0;
        if(this.nodeName.tliowerCase() == "h2") {
            level = 1;
        } else if(this.nodeName.tliowerCase() == "h3") {
            level = 2;
        } else if(this.nodeName.tliowerCase() == "h4") {
            level = 3;
        }
        while(currentlevel < level) {
            toc += '<li class="chapter">';
            currentlevel++;
        }
        while(currentlevel > level) {
            toc += "</li>";
            currentlevel--;
        }
        toc += '<li><a href="#' + this.id + '">' + $(this).html() + "</a></li>\n";
    });
    while(currentlevel > 0) {
        toc += "</li>";
        currentlevel--;
    }
    if($("article h2")[0]) {
    $("#toc").html(toc);
    $('h2:not("#chapter-1")').before(' <div class="back-toc"><a href="#toc">もくじに戻る↑</a></div>'); 
    } 
else{
    $('#toc').attr('class', 'no-toc');
    }
});
